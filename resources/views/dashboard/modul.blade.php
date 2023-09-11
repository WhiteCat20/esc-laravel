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
                            Uploaded Files and Learning Module
                        </h3>
                    </div>

                    <div class="card-body">
                        @if ($uploaded->isEmpty())
                            <h5 class="text-center">There are no uploaded files</h5>
                        @else
                            @foreach ($uploaded as $a)
                                <div class="callout callout-info d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>{{ $a->nama }}</h3>
                                            <div>{{ $a->deskripsi }}</div>
                                        </div>
                                    </div>
                                    <a href="{{ asset($a->file) }}"
                                        class="btn btn-sm btn-success align-items-center d-flex text-decoration-none text-white text-lg">Download</a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
