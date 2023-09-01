@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1 flex-md-reverse">
            {{-- Pengumuman dan Agenda --}}
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-bullhorn"></i>
                            Announcements
                        </h3>
                    </div>

                    <div class="card-body">
                        @if ($announcement->isEmpty())
                            <h5 class="text-center">There are no announcement</h5>
                        @else
                            @foreach ($announcement as $a)
                                <div class="callout callout-info">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-bold d-inline">{{ $a->subject }}</h5> <span class="d-inline">
                                            Author :
                                            {{ $a->nama_asisten }}</span>
                                    </div>
                                    <p>{!! $a->deskripsi !!}</p>
                                    <a href="#"
                                        class="text-white text-decoration-none btn disabled btn-sm btn-primary">Details</a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
            {{-- Tugas dan Pengumpulan --}}
            <div class="col-md-3">
                <div class="card" style="position: sticky; top: 20px;">
                    <div class="card-header">
                        <h5 class="m-0">Assignment and Submission</h5>
                    </div>
                    <div class="card-body">
                        <ul class="mb-3" style="padding: 10px">
                            <li><span class="d-block">Submission Rangkuman Briefing</span>
                                <span class="text-bold">Deadline : 30 Agustus 2023</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-primary">Go to submission page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
