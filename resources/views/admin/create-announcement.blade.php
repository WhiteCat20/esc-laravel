@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Announce all EPTA participants</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store-announcement') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Project Description</label> <span><a target="blank"
                                        href="{{ route('editor-page') }}">Editor Page</a></span>
                                <textarea class="form-control" name="deskripsi" id="summernote"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Associated agenda</label>
                                <select id="inputStatus" name="agenda_id" class="form-control custom-select">
                                    @foreach ($agenda as $a)
                                        <option value="{{ $a->id }}">{{ $a->nama_agenda }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#summernote").summernote({
                tabsize: 2,
                height: 100,
            });
        </script>
    </div>
@endsection
