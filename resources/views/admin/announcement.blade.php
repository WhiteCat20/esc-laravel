@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header m-2">
                        <h3 class="card-title">All agenda is listed here!</h3>
                        <div class="card-tools">
                            <a href="{{ route('create-announcement-admin') }}" class="btn btn-sm btn-info">
                                New Announcement
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Author</th>
                                    <th>Agenda</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcement as $a)
                                    <tr>
                                        <td>{{ $a->subject }}</td>
                                        <td>{{ $a->nama_asisten }}</td>
                                        <td>{{ $a->agenda->nama_agenda }}</td>
                                        <td>{!! $a->deskripsi !!}</td>
                                        <td>
                                            <form action="{{ route('delete-announcement', ['id' => $a->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="return confirm('Are You Sure Deleting {{ $a->subject }}?')"
                                                    class="btn btn-sm btn-danger">Delete!</button>
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
@endsection
