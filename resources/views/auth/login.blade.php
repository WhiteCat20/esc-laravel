@extends('layout.auth-layout')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>ECS Study Club</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                <form action="#" method="POST">

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                    </div>
                </form>
                <p class="text-center mt-3">
                    <a href="{{ route('register-page') }}">Register here!</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
