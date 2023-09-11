<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ModulBelajar;
use Illuminate\Http\Request;

class ModulBelajarController extends Controller
{

    public function index()
    {
        $title = 'Uploaded Files and Learning Module';
        $uploaded = ModulBelajar::latest()->get();
        return view('dashboard.modul', compact('title', 'uploaded'));
    }

    public function index_admin()
    {
        $title = "Upload Learning Module";
        $uploaded = ModulBelajar::latest()->get();
        return view('admin.modul', compact('title', 'uploaded'));
    }

    public function create()
    {
        $title = "Upload Learning Module";
        return view('admin.create-modul', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_file = 'storage/uploaded_files';
        $file->move($tujuan_file, $nama_file);
        $validatedData["file"] = $tujuan_file . '/' . $nama_file;


        ModulBelajar::create($validatedData);

        return redirect(route('modul-admin'))->with('success', 'File Uploaded Successfully');
    }
}
