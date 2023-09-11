@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload file</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('upload-modul') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="subject">Nama File</label>
                                <input type="text" name="nama" id="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <div id="selectedFileName" class="selected-file-name d-block"></div>
                                <div class="custom-file">
                                    <input type="file" class="" id="file" name="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const fileInput = document.getElementById('file');
        const customFileLabel = document.querySelector('.custom-file-label');
        const selectedFileName = document.getElementById('selectedFileName');

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                customFileLabel.textContent = file.name;
                // selectedFileName.textContent = `Selected file: ${file.name}`;
            } else {
                customFileLabel.textContent = 'Choose file';
                // selectedFileName.textContent = '';
            }
        });
    </script>
@endsection
