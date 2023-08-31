<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index_admin()
    {
        $title = 'All EPTA Agenda';
        return view('admin.agenda', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_agenda' => 'required',
            'slug' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
            'kode_absensi' => 'required',
        ]);

        $validatedData["slug"] = Str::slug($validatedData["slug"]);
    }
}
