@extends('layout.auth-layout')
@section('content')
    <div class="card" style='padding:100px'>
        <div class="login-logo">
            <a href="#"><b>ECS Study Club</b></a>
        </div>
        <!-- /.login-logo -->
        <div>
            <div>
                <p class="login-box-msg">Register Here</p>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">NRP</label>
                                <input type="email" class="form-control" id="nama" name="nrp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">No Telp</label>
                                <input type="email" class="form-control" id="nama" name="no_telp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="width: 100%; background-color: gainsboro">
                        <div style="padding: 30px">
                            <span>Pembayaran</span>
                            <ul>
                                <li>Pembayaran ESC sebesar Rp30.000</li>
                                <li>Pembayaran dapat melalui OVO, GoPay, Mandiri</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Bukti Pembayaran</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
