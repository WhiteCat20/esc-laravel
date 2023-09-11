@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header m-2">
                        <h3 class="card-title">All uploaded files is listed here!</h3>
                        <div class="card-tools">
                            <a href="{{ route('create-modul') }}" class="btn btn-sm btn-info">
                                Upload File
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama File</th>
                                    <th>Deskripsi</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uploaded as $a)
                                    <tr>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->deskripsi }}</td>
                                        <td>
                                            <a href="{{ asset($a->file) }}" class="btn btn-sm btn-info">Check!</a>
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
@endsection
