@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-primary">
                    <div class="inner p-3">
                        <h3>{{ $participant_count }}</h3>
                        <p>Participants</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="{{ route('participants') }}" class="small-box-footer">More Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-success">
                    <div class="inner p-3 ">
                        @php
                            $times_participants = $participant_count * 30000;
                            $formatted_value = number_format($times_participants, 0, '.', ',');
                        @endphp
                        <h3>Rp{{ $formatted_value }}</h3>
                        <p>Payments</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                    <a href="#" onclick="alert('Number of Participants * Rp30000')" class="small-box-footer">More Info
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner p-3">
                        <h3>0</h3>
                        <p>Submitted Assignment</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-copy"></i>
                    </div>
                    <a href="#" onclick="alert('Number of Participants * Rp30000')" class="small-box-footer">More Info
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-1">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title font-weight-bold">Attendee</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Attending</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frontend Page</td>
                                    <td>Web Development </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Add New Project</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Projects</a>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title font-weight-bold">Attendee</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Attending</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frontend Page</td>
                                    <td>Web Development </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Add New Project</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Projects</a>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
        <div class="col-auto"></div>
    </div>
@endsection
