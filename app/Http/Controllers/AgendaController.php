<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $title = "All EPTA Agendas";
        $agendas = Agenda::latest()->get();
        return view('dashboard.agenda', compact('title', 'agendas'));
    }

    public function index_admin()
    {
        $title = 'All EPTA Agenda';
        $agendas = Agenda::all();
        return view('admin.agenda', compact('title', 'agendas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_agenda' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
        ]);

        // Generate a random 6-digit kode_absensi
        $kodeAbsensi = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        // Add the generated kode_absensi to the validated data
        $validatedData['kode_absensi'] = $kodeAbsensi;



        // Optionally, you can also generate the slug
        $validatedData['slug'] = Str::slug($validatedData['nama_agenda']);

        // dd($validatedData);

        Agenda::create($validatedData);

        return redirect(route('agenda-admin'));
    }

    public function change_code($id)
    {
        // Find the agenda by ID (replace with your model and logic)
        $agenda = Agenda::findOrFail($id);

        // Generate a new random 6-digit kode_absensi
        $newKodeAbsensi = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        // Update the agenda with the new kode_absensi
        $agenda->update([
            'kode_absensi' => $newKodeAbsensi,
        ]);

        // Redirect or return a response as needed
        return redirect(route('agenda-admin'));
    }
}
