<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            background-color: aqua;
            height: 9rem;
            display: block;
        }
        .menuAtas{
            background-color: rgb(255, 255, 255);
            height: 7rem;
            display: flex;
                
        }

        .menuAtas .logo{
             width: 20%;
             display: flex;
             justify-content: center;
             align-items: center;
             cursor: pointer;
        }

        .menuAtas .informasi{
             width: 80%;
             display: flex;
             justify-content: center;
             align-items: center;
        }

        .menuAtas .informasi ul{
            display: flex;
            gap: 20px;
            list-style: none;
        }
        
        .menuAtas .informasi ul li a{
            display: flex; 
            align-items: center;
            text-decoration: none;
        }

        .menuAtas .informasi ul li a span{
            margin-left: 8px;
            font-family: 'Courier New', Courier, monospace;
            color: rgb(7, 138, 138);
        }

        .navbar {
            display: flex; /* Menggunakan flexbox untuk navbar */
            background-color: #ffffff; /* Warna latar belakang navbar */
            padding: 10px;
            justify-content: center; /* Menyusun item di tengah */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan */
        }

        .menu-item {
            position: relative; /* Untuk menempatkan dropdown menu */
            margin-right: 20px; /* Jarak antar menu */
        
        }

        .menu-link {
            text-decoration: none;
            color: white; /* Warna teks tautan */
            padding: 10px;
            border-radius: 5px;
            display: flex; /* Menggunakan flexbox untuk menu link */
            align-items: center; /* Menyusun item di tengah secara vertikal */
            justify-content: center; /* Menyusun item di tengah secara horizontal */
            color: black;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        .dropdown-menu {
            display: none; /* Sembunyikan menu dropdown secara default */
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
            width: 200px;
        }

        .dropdown-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-menu ul li {
            padding: 8px 12px;
        }

        .dropdown-menu ul li a {
            text-decoration: none;
            color: black;
        }

        .dropdown-menu ul li:hover {
            background-color: #f1f1f1; /* Warna latar belakang saat hover */
        }

        /* Menampilkan menu saat hover */
        .menu-item:hover .dropdown-menu {
            display: block;
        }

        .menu-link:hover{
            color: rgb(0, 234, 255);
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <div class="menuAtas">
            <div class="logo">
                <img src="{{ asset('img/logo_login.jpg') }}" alt="signup" width="100px">
            </div>
            <div class="informasi">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ asset('img/location.png') }}" alt="location" width="43px">
                            <span>Lokasi Kami</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('img/phone.png') }}" alt="call" width="39px">
                            <span>Informasi Lebih Lanjut</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('img/instagram.png') }}" alt="instagram" width="40px">
                            <span>@RS ANDRAWINATA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar">
            <div class="menu-item">
                <a href="#" class="menu-link">Profil</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Sejarah</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Fasilitas</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Rawat Inap</a></li>
                        <li><a href="#">Farmasi</a></li>
                        <li><a href="#">Laboratorium</a></li>
                        <li><a href="#">UGD</a></li>
                        <li><a href="#">Medical Check Up</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Jadwal Praktik</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Spesialis Anak</a></li>
                        <li><a href="#">Spesialis THT</a></li>
                        <li><a href="#">Spesialis Gigi</a></li>
                        <li><a href="#">Spesialis Bedah</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Promo dan layanan</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Promo</a></li>
                        <li><a href="#">Rawat Inap</a></li>
                        <li><a href="#">UGD</a></li>
                        <li><a href="#">Pembelian Obat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const menuLink = document.querySelector('.menu-link');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    menuLink.addEventListener('click', function(event) {
        event.stopPropagation(); // Mencegah event bubbling
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function() {
        dropdownMenu.style.display = 'none'; // Menutup menu saat klik di luar
    });
});
    </script>
</body>
</html>