@extends('layout.other-layout')
@section('content')
    @if (auth()->user()->status !== 'verified')
        <div class="lockscreen-wrapper" style="max-width: 100%">
            <div class="lockscreen-logo">
                <img src="{{ asset('img/success.gif') }}" width="350" alt="warning unverified">
            </div>
            <div class="alert-unverified-text text-center mb-3">
                <span style="font-size: 3rem">Thank you for participating in EPTA 2023</span>
                <h2>Please wait for your account to be verified, we'll inform you soon</h2>
                <a href="/wa.me/6285756429806">feel free to contact us!</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/" class="btn btn-success">Refresh</a>
            </div>
        </div>
    @endif
    @if (auth()->user()->status === 'verified')
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <img src="{{ asset('img/pakistani-guy-meme.png') }}" width="300" alt="warning unverified">
            </div>
            <div class="alert-unverified-text text-center mb-3">
                <h1 style="font-size: 3rem">Your account is already verified -_-</h1>
                <h2>Why u here la?</h2>
                <a href="#">i don't think there's nothing wrong with your account la!</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/" class="btn btn-success">Refresh</a>
            </div>
        </div>
    @endif
@endsection
