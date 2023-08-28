<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'EPTA Dashboard';
        return view('dashboard.index', compact('title'));
    }
    public function unverified()
    {
        $title = 'Oops, Unverified';
        return view('other.unverified', compact('title'));
    }
}
