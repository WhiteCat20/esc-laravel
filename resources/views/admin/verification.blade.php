@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participants as $p)
                                    <tr>
                                        <td>{{ $p->nama }}</td>
                                        <td>
                                            @if ($p->status == 'verified')
                                                <span class="badge bg-success">Verified</span>
                                            @endif
                                            @if ($p->status == 'unverified')
                                                <span class="badge bg-danger">Unverified</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ asset($p->userpreferences->bukti_pembayaran) }}">
                                                <img src="{{ asset($p->userpreferences->bukti_pembayaran) }}" width="300"
                                                    alt="oke">
                                            </a>
                                        <td>
                                            <form action="{{ route('toggle-status', $p) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-info" type="submit">
                                                    Toggle Status
                                                </button>
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
