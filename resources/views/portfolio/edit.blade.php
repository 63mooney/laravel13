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

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Edit Pelanggan</h1>
                    <p class="mb-0">Form untuk mengedit data pelanggan.</p>
                </div>
                <div>
                    <a href="" class="btn btn-primary"><i class="far fa-question-circle me-1"></i> Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                       <form action="{{ route('portfolio.update', $dataPortfolio->pelanggan_id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- First Name -->
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">First name</label>
                                        <input type="text" id="first_name" class="form-control" name="nama" value="{{ $dataPortfolio->nama }}" required >
                                    </div>

                                    <!-- Last Name -->

                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Birthday -->
                                    <div class="mb-3">
                                        <label for="birthday" class="form-label">Birthday</label>
                                        <input type="date" id="birthday" class="form-control" name="birthday" value="{{ $dataPortfolio->birthday }}" required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select mb-0" aria-label="Gender select example">
                                            <option selected>Gender</option>
                                            <option value="Female" {{ $dataPortfolio->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Male" {{ $dataPortfolio->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control" name="email" value="{{ $dataPortfolio->email }}" required>
                                    </div>

                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" id="phone" class="form-control" name="phone" value="{{ $dataPortfolio->phone }}">
                                    </div>

                                    <!-- Buttons -->
                                    <div class="">
                                        <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                                        <a href="{{ route('portfolio.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                                    </div>
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
