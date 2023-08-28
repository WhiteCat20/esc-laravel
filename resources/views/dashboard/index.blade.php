@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            {{-- Pengumuman dan Agenda --}}
            <div class="col-9">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-bullhorn"></i>
                            Announcements
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                        <div class="callout callout-info">
                            <h5 class="text-bold">I am a danger callout!</h5>
                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            <a href="#" class="text-white text-decoration-none btn btn-sm btn-primary">Details</a>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Tugas dan Pengumpulan --}}
            <div class="col-3">
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
            {{-- Briefly agenda --}}

        </div>
    </div>
@endsection
