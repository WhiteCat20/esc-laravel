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
                                            <small class="text-gray">{{ $a->deskripsi }}</small>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-lg btn-success" data-toggle="modal"
                                        data-target="#attend">
                                        Attend!
                                    </button>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="attend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Agenda</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('create-agenda') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputName">Nama Agenda</label>
                            <input type="text" id="inputName" name="nama_agenda" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" id="tanggal" name="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" id="tempat" name="tempat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
