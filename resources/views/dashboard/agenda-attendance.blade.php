@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header pt-3">
                <h5 class="card-title">Absen untuk agenda : <b>{{ $title }}</b></h5>
            </div>
            <form action="{{ route('submit-attendance', ['agendaId' => $agendaId]) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_absensi">Silahkan masukan kode absensi</label>
                        <input type="text" class="form-control" id="kode_absensi" name="kode_absensi"
                            placeholder="999999">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
