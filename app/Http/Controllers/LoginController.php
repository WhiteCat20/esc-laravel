<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $title = "EPTA Login Page";
        return view('auth.login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return redirect('/login')->with('LoginError', 'Login Failed!');
    }

    public function forgot_password_page()
    {
        $title = "Forgot Password";
        return view('auth.forgot-password', compact('title'));
    }

    public function resetPassword(Request $request)
    {
        $validatedData =  $request->validate([
            'email' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
        ]);

        // dd($validatedData);

        // Verify that the email and phone number match a user in your database.
        $user = User::where('email', $request->email)
            ->where('no_telp', $request->no_telp)
            ->first();
        if (!$user) {
            return back()->withInput()->withErrors(['email' => 'Invalid email or phone number combination.']);
        }
        // Reset the user's password.
        $user->update(['password' => Hash::make($request->password)]);

        return redirect('/login')->with('status', 'Password reset successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()
            ->session()
            ->invalidate();
        request()
            ->session()
            ->regenerateToken();

        return redirect('/login');
    }
}
