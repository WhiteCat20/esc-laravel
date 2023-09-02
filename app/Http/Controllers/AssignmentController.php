<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index_admin()
    {
        $title = 'EPTA Assignment and Submissions';
        return view('admin.assignment', compact('title'));
    }
}
