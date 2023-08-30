<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verificationPage()
    {
        $title = 'Verification Page';
        $participants = User::where('role', 'Guest')->get();
        return view('admin.verification', compact('participants', 'title'));
    }

    public function toggleStatus(User $user)
    {
        $user->status = ($user->status == 'verified') ? 'unverified' : 'verified';
        $user->save();

        return redirect()->back()->with('success', 'User status has been updated.');
    }
}
