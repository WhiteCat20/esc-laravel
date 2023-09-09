@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header m-2">
                        <h3 class="card-title">All agenda is listed here!</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                New Agenda
                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Agenda</th>
                                    <th>Tanggal</th>
                                    <th>Tempat</th>
                                    <th>Deskripsi</th>
                                    <th>Kode Absensi</th>
                                    <th>Ganti kode absensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agendas as $a)
                                    <tr>
                                        <td>{{ $a->nama_agenda }}</td>
                                        <td>{{ $a->tanggal }}</td>
                                        <td>{{ $a->tempat }}</td>
                                        <td>{{ $a->deskripsi }}</td>
                                        <td>{{ $a->kode_absensi }}</td>
                                        <td>
                                            <form action="{{ route('change-code', ['id' => $a->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Change!</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
