@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Agenda</th>
                                    <th>Tempat</th>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Kode Absensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($participants as $p)
                                    <tr>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->nrp }}</td>
                                        <td>{{ $p->no_telp }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
