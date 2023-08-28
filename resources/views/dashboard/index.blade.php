@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title font-weight-bold">Recent Projects</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Project Title</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Frontend Page</td>
                                        <td>Web Development </td>
                                        <td><span class="badge badge-info">On Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>Event Opening Feeds</td>
                                        <td>Creative Design</td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>Backend API</td>
                                        <td>Web Development</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
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
    </div>
@endsection
