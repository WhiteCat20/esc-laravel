<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcement = Announcement::all();
        $title =
            'Announcements for EPTA Participants';
        return view('admin.announcement', compact('title', 'announcement'));
    }

    public function create()
    {
        $agenda = Agenda::all();
        $title = 'Create Announcement';
        return view('admin.create-announcement', compact('title', 'agenda'));
    }

    public function store(Request $request)
    {
        $auth_user = Auth::user();
        $validatedData = $request->validate([
            'subject' => 'required|string',
            'deskripsi' => 'required|string',
            'agenda_id' => 'required|exists:agendas,id', // Ensure the agenda_id exists in agendas table
        ]);

        $validatedData['nama_asisten'] = $auth_user->nama;

        $announcement = Announcement::create([
            'subject' => $validatedData['subject'],
            'deskripsi' => $validatedData['deskripsi'],
            'agenda_id' => $validatedData['agenda_id'],
            'nama_asisten' => $validatedData['nama_asisten']
        ]);

        return redirect(route('announcement-admin'));
    }

    public function delete_announcement($id)
    {
        $ann = Announcement::find($id);
        Announcement::destroy($ann->id);
        return redirect(route('announcement-admin'));
    }
}
