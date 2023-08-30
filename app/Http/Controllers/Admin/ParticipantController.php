<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function viewParticipants()
    {
        $title = 'EPTA Participants';
        $participants = User::where('role', 'Guest')->get();
        return view('admin.participant', compact('title', 'participants'));
    }
}
