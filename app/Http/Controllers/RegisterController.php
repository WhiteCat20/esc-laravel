<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "EPTA Register Page";
        return view('auth.register', compact('title'));
    }

    public function store(Request $request)
    {
        $registrationData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'nrp' => 'required',
            'no_telp' => 'required',
            'bukti_pembayaran' => 'required',
            'mentor' => 'nullable',
            'kelompok' => 'nullable',
            'profile_photo' => 'nullable',
            'description' => 'nullable',
        ]);

        $registrationData["password"] = Hash::make($registrationData["password"]);

        $user = User::create([
            'nama' => $registrationData["nama"],
            'email' => $registrationData["email"],
            'password' => $registrationData["password"],
            'nrp' => $registrationData["nrp"],
            'no_telp' => $registrationData["no_telp"],
        ]);

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $nama_bukti_pembayaran = $bukti_pembayaran->getClientOriginalName();
        $tujuan_bukti_pembayaran = 'storage/' . $registrationData["nama"];
        $bukti_pembayaran->move($tujuan_bukti_pembayaran, $nama_bukti_pembayaran);

        $user->userpreferences()->create([
            'bukti_pembayaran' => $tujuan_bukti_pembayaran . '/' . $nama_bukti_pembayaran,
        ]);

        return redirect('/login')->with('message', 'Added Successfully');
    }
}
