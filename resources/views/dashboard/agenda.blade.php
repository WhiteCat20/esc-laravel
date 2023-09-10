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
                            Attendance
                        </h3>
                    </div>

                    <div class="card-body">
                        @if ($agendas->isEmpty())
                            <h5 class="text-center">There are no announcement</h5>
                        @else
                            @foreach ($agendas as $a)
                                <div class="callout callout-info d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3>{{ $a->nama_agenda }}</h3>
                                            <div>{{ $a->tempat }}, {{ $a->tanggal }}</div>
                                            <small class="text-gray">{{ $a->deskripsi }}</small>
                                        </div>
                                    </div>
                                    <a href="{{ route('attendance-agenda', ['id' => $a->id]) }}"
                                        class="btn btn-sm btn-success align-items-center d-flex text-decoration-none text-white text-lg">Attend!</a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
    @endif
    <!-- Rest of your form and modal code -->
    <!-- Success Modal HTML -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel" style="color: #28a745">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: #28a745">
                    Thanks {{ $user->nama }}, attendance submitted successfully.
                </div>
            </div>
        </div>
    </div>
    @if (session('error'))
        <script>
            $(document).ready(function() {
                $('#errorModal').modal('show');
            });
        </script>
    @endif
    <!-- Rest of your form and modal code -->
    <!-- Success Modal HTML -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModal" style="color: #dc3545">Failed!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: #dc3545">
                    Sorry {{ $user->nama }}, attendance failed or wrong code!
                </div>
            </div>
        </div>
    </div>

@endsection
