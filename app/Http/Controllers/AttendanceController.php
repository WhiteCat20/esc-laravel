<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance_show($id)
    {
        $agenda = Agenda::find($id);
        $user = auth()->user();
        $title = $agenda->nama_agenda;
        $agendaId = $agenda->id;
        return view('dashboard.agenda-attendance', compact('title', 'agendaId', 'user'));
    }

    public function submit_attendance(Request $request, $agendaId)
    {
        $user = auth()->user();
        $agenda = Agenda::findOrFail($agendaId);
        // Check if the entered code matches the agenda's code
        if ($request->input('kode_absensi') === $agenda->kode_absensi) {
            // Insert a record into the attendances table
            Attendance::create([
                'agenda_id' => $agenda->id,
                'user_id' => $user->id,
            ]);

            return redirect(route('agenda'))->with('success', 'Attendance submitted successfully.');
        }
        return redirect(route('agenda'))->with('error', 'Invalid attendance code.');
    }
}
