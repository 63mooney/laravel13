<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
	<title>Volt - Free Bootstrap 5 Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
	<meta name="author" content="Themesberg">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets-admin/img/favicon/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/img/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/img/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('assets-admin/img/favicon/site.webmanifest')}}">
	<link rel="mask-icon" href="{{asset('assets-admin/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('assets-admin/css/volt.css') }}" rel="stylesheet">

</head>

<body>


    <main class="content">
        <div class="py-4">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tambah Portfolio</h1>
                    <p class="mb-0">Form untuk menambahkan data portfolio baru.</p>
                </div>
                <div>
                    <a href="{{ route('portfolio.index') }}" class="btn btn-primary"><i class="far fa-question-circle me-1"></i> Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- First Name -->
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">Name</label>
                                        <input type="text" id="nama" class="form-control" name="nama" required >
                                    </div>

                                    <div class="mb-3">
                                        <label for="birthday" class="form-label">Birthday</label>
                                        <input type="date" id="birthday" class="form-control" name="birthday">
                                    </div>

                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Birthday -->


                                    <!-- Gender -->
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select">
                                            <option value="">-- Pilih --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <!-- Email -->


                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" id="phone" class="form-control" name="phone">
                                    </div>

                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input type="file" name="foto" id="foto" accept=".jpg,.jpeg,.png,.webp" class="form-control"

                                    </div>


                                    <!-- Buttons -->

                                </div>
                                <div class="">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('portfolio.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                                    </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Core -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>
