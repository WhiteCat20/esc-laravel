@extends('layout.other-layout')
@section('content')
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <img src="{{ asset('img/SpanishWhirlwindGaur-max-1mb.gif') }}" width="300" alt="warning unverified">
        </div>
        <div class="alert-unverified-text text-center mb-3">
            <h1 style="font-size: 3rem">Your account is still not verified :(</h1>
            <h2>Please wait for a moment</h2>
            <a href="#">is there something wrong? feel free to contact us!</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/" class="btn btn-success">Refresh</a>
        </div>
    </div>
@endsection
