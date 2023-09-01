@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1 flex-md-reverse">
            {{-- Pengumuman dan Agenda --}}
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title m-1">
                            <i class="fas fa-calendar-week"></i>
                            Attendance
                        </h3>
                    </div>

                    <div class="card-body">
                        @if ($agendas->isEmpty())
                            <h5 class="text-center">There are no announcement</h5>
                        @else
                            @foreach ($agendas as $a)
                                <div class="callout callout-info d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>{{ $a->nama_agenda }}</h3>
                                            <div>{{ $a->tempat }}, {{ $a->tanggal }}</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-success">Attend!</button>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
