<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPreferences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "ESC Register Page";
        return view('auth.register', compact('title'));
    }

    public function store(Request $request)
    {
        $registrationData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'nrp' => 'required',
            'no_telp' => 'required',
            'role' => 'required',
            'status' => 'required',
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
            'role' => $registrationData["role"],
            'status' => $registrationData["status"],
        ]);
        $user->save();

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $nama_bukti_pembayaran = $registrationData['nama'] . ' ' . 'bukti pembayaran' . $bukti_pembayaran->getClientOriginalExtension();
        $tujuan_bukti_pembayaran = 'storage/' . $registrationData["nama"];
        $bukti_pembayaran->move($tujuan_bukti_pembayaran, $nama_bukti_pembayaran);

        $preference = new UserPreferences([
            'bukti_pembayaran' => $tujuan_bukti_pembayaran,
            'status' => $registrationData["status"],
            'mentor' => $registrationData["mentor"],
            'kelompok' => $registrationData["kelompok"],
            'profile_photo' => $registrationData["profile_photo"],
            'description' => $registrationData['description']
        ]);

        $user->preference()->save($preference);

        return redirect('/');

        //profile photo
        // $profile_photo = $request->file('profile_photo');
        // $nama_profile_photo = $registrationData['nama'] . ' ' . 'profile photo' . $profile_photo->getClientOriginalExtension();
        // $tujuan_profile_photo = 'storage/' . $registrationData["nama"];
        // $profile_photo->move($tujuan_profile_photo, $nama_profile_photo);



    }
}
