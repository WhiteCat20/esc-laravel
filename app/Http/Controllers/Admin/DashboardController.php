<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'EPTA Dashboard';
        $announcement = Announcement::latest()->get();
        return view('dashboard.index', compact('title', 'announcement'));
    }

    public function index_admin()
    {
        $title = 'Main Admin Dashboard';
        $participant_count = User::where('role', 'Guest')->count();
        return view('admin.index', compact('title', 'participant_count'));
    }

    public function unverified()
    {
        $title = 'Oops, Unverified';
        return view('other.unverified', compact('title'));
    }
}
