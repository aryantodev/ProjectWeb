<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="menuAtas align-items-center ml-3">
            <div class="col-md-2 text-center">
                <div class="logo">
                    <img src="{{ asset('img/logo_login.jpg') }}" alt="signup" width="100px">
                </div>
            </div>
            <div class="col-md-10">
                <div class="informasi">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="" class="d-flex align-items-center">
                                <img src="{{ asset('img/location.png') }}" alt="location" width="43px">
                                <span>Lokasi Kami</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="d-flex align-items-center">
                                <img src="{{ asset('img/phone.png') }}" alt="call" width="39px">
                                <span>Informasi Lebih Lanjut</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="d-flex align-items-center">
                                <img src="{{ asset('img/instagram.png') }}" alt="instagram" width="40px">
                                <span>@RS ANDRAWINATA</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tentang Kami</a>
                            <a class="dropdown-item" href="#">Sejarah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdownFasilitas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fasilitas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownFasilitas">
                            <a class="dropdown-item" href="#">Rawat Inap</a>
                            <a class="dropdown-item" href="#">Farmasi</a>
                            <a class="dropdown-item" href="#">Laboratorium</a>
                            <a class="dropdown-item" href="#">UGD</a>
                            <a class="dropdown-item" href="#">Medical Check Up</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdownJadwal" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jadwal Praktik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownJadwal">
                            <a class="dropdown-item" href="#">Spesialis Anak</a>
                            <a class="dropdown-item" href="#">Spesialis THT</a>
                            <a class="dropdown-item" href="#">Spesialis Gigi</a>
                            <a class="dropdown-item" href="#">Spesialis Bedah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" id="navbarDropdownPromo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Promo dan layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPromo">
                            <a class="dropdown-item" href="#">Promo</a>
                            <a class="dropdown-item" href="#">Rawat Inap</a>
                            <a class="dropdown-item" href="#">UGD</a>
                            <a class="dropdown-item" href="#">Pembelian Obat</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @yield('konten')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>