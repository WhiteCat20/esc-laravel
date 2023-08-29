@extends('layout.auth-layout')
@section('content')
    <div class="card" style='padding:100px'>
        <div class="login-logo">
            <a href="#"><b>Welcome to EPTA Registration</b></a>
        </div>
        <div>
            <div>
                <p class="login-box-msg">Please fill columns below</p>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Example : John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Example : johndoe@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">NRP</label>
                                <input type="text" class="form-control" id="nama" name="nrp">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">No Telp</label>
                                <input type="text" class="form-control" id="nama" name="no_telp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="width: 100%; background-color: gainsboro">
                        <div style="padding: 30px">
                            <span>Pembayaran</span>
                            <ul>
                                <li>Pembayaran EPTA sebesar Rp30.000</li>
                                <li>BRI : 124801006744508 a/n SAFIRA FARSYA PUTRI</li>
                                <li>Gopay : 08113006222 (Safira Farsya Putri)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bukti_pembayaran">Bukti Pembayaran</label>
                        <div class="input-group">
                            <div id="selectedFileName" class="selected-file-name d-block"></div>
                            <div class="custom-file">
                                <input type="file" class="" id="bukti_pembayaran" name="bukti_pembayaran">
                                <label class="custom-file-label" for="bukti_pembayaran">Choose file</label>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const fileInput = document.getElementById('bukti_pembayaran');
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
