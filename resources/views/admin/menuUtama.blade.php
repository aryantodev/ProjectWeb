@extends('/admin/layout')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>$title, 'title'</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * {
                margin: 0%;
                padding: 0%;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            .html {
                scroll-behavior: smooth;
            }

            .container-fluid {
                box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.2);
            }

            .layanan-unggulan {
                width: 100%;
                margin-top: 100px;
                margin-bottom: 100px;
                background: #ffffff;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            .container-unggulan {
                display: flex;
                gap: 2rem;
                justify-content: center;
                align-items: center;
            }

            .container-unggulan .card{
                width: 16rem;
            }

            .container-unggulan .card img{
                width: 14rem;
            }



            .fasilitas-layanan {
                width: 100%;
                height: 80vh;
                background: #ffffff;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            h2 {
                font-size: 40px;
                height: 7rem;
            }

            .icons {
                display: flex;
            }

            .icons a {
                width: 100px;
                height: 100px;
                text-align: center;
                text-decoration: none;
                color: #000;
                box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.05);
                margin: 0 30px;
                border-radius: 50%;
                border: solid;
                position: relative;
            }

            .icons a i {
                font-size: 50px;
                line-height: 100px;
            }


            .info_section {
                background-color: #252525;
                color: #ffffff;
            }

            .info_section .info_top {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .container_info{
              width: 70rem;
              margin-left: 3rem;
              margin-top: 2rem;
            }

            .info_section .info_top .info_logo {
                margin-right: 45px;
                margin-top: 2rem;
            }

            .info_section .info_top .info_logo a {
                display: block;
                background-color: #252525;
                padding: 0 10px;
            }

            .info_section .info_top .info_logo a img {
                width: 100px;
            }

            .info_links{
              margin-top: 2rem;
            }

            .info_post{
              margin-top: 2rem;
            }

            .info_section .info_form {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                margin-top: 2rem;
                
            }

            .info_section .info_form form {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: end;
                -ms-flex-align: end;
                align-items: flex-end;
            }

            .info_section .info_form form input {
                background-color: transparent;
                padding: 5px 0;
                outline: none;
                width: 100%;
                min-width: 100%;
                color: #ffffff;
                border: none;
                border-bottom: 1px solid #ffffff;
            }

            .info_section .info_form form input::-webkit-input-placeholder {
                color: #a4c4ce;
            }

            .info_section .info_form form input:-ms-input-placeholder {
                color: #a4c4ce;
            }

            .info_section .info_form form input::-ms-input-placeholder {
                color: #a4c4ce;
            }

            .info_section .info_form form input::placeholder {
                color: #a4c4ce;
            }

            .info_section .info_form form button {
                background-color: transparent;
                color: #a4c4ce;
                margin-top: 15px;
                text-transform: uppercase;
                font-size: 15px;
                outline: none;
                border: none;
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }

            .info_section h5 {
                text-transform: uppercase;
                position: relative;
                padding-left: 20px;
                margin-bottom: 25px;
            }

            .info_section h5:before {
                content: "";
                position: absolute;
                top: 50%;
                left: 0;
                width: 15px;
                height: 15px;
                background-color: #a4c4ce;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            .info_section .info_links .info_links_menu {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .info_section .info_links .info_links_menu a {
                color: #ffffff;
            }

            .info_section .info_links .info_links_menu a:not(:nth-last-child(1)) {
                margin-bottom: 10px;
            }

            .info_section .info_links .info_links_menu a:hover,
            .info_section .info_links .info_links_menu a.active {
                color: #a4c4ce;
            }

            .info_section .info_post .post_box {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .info_section .info_post .post_box .img-box {
                width: 65px;
                min-width: 65px;
                height: 65px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                background-color: #ffffff;
                margin-right: 10px;
            }

            .info_section .info_post .post_box .img-box img {
                width: 55px;
            }

            .info_section .info_post .post_box p {
                margin: 0;
            }

            .info_section .info_post .post_box:not(:nth-last-child(1)) {
                margin-bottom: 15px;
            }

            .info_section .info_contact a {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #ffffff;
                margin-bottom: 10px;
            }

            .info_section .info_contact a i {
                margin-right: 5px;
                width: 25px;
            }

            .info_section .info_contact a:hover p {
                color: #ffffff;
            }

            .info_section .social_box {
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin-top: 25px;
            }

            .info_section .social_box a {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #a4c4ce;
                font-size: 24px;
                margin-right: 10px;
            }

            .footer_section {
                position: relative;
                background-color: #252525;
                text-align: center;
                padding: 1rem;
            }

            .footer_section p {
                color: #ffffff;
                padding: 25px 0;
                margin-top: 2rem;
            }

            .footer_section p a {
                color: inherit;
            }

            @media (max-width: 768px) {
            .container-unggulan {
                flex-direction: column;
                align-items: center;
            }

            .container-unggulan .card {
                width: 90%;
                margin-bottom: 20px;
            }

            .container-unggulan .card img{
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

        }
        </style>
    </head>

    <body>
        <section>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/finishing[1].jpg') }}" class="d-block w-100" alt="...">
                    </div>
        </section>

        <section>
            <div class="layanan-unggulan">
                <h1><center>Layanan Unggulan RS Andrawinata</center></h1>
            </div>
            <div class="container-unggulan">
                <div class="card">
                    <img src="{{asset('img/pngtree-eye-care-health-logo-design-template-vector-icon-png-image_4971841.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pengobatan mata Terbaik</h5>
                      <p class="card-text">Rumah Sakit Andrawinata berupaya memberikan pelayanan terbaik berkaitan dengan kesehatan mata.</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="{{asset('img/istockphoto-1466539378-612x612.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Perawatan Tulang Terbaik</h5>
                      <p class="card-text">Rumah Sakit Andrawinata berupaya memberikan pelayanan terbaik berkaitan dengan kesehatan tulang.</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="{{asset('img/ugd.png')}}" class="card-img-top" alt="..." style="width: 16rem; height:15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Layanan UGD 24 JAM</h5>
                      <p class="card-text">Rumah Sakit Andrawinata mampu memberikan layanan berupa kamar UGD selama 24 JAM jika darurat.</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
            </div>
        </section>


        <section>
            <div class="fasilitas-layanan">
              <h2><center>Fasilitas & Layanan RS Andawinata</center></h2>
              <div class="icons">
                <a href=""><i class="fa-solid fa-bed" style="color: #0e587f;"></i></a>
                <a href=""><i class="fa-solid fa-mortar-pestle" style="color: #0e587f;"></i></a>
                <a href=""><i class="fa-solid fa-flask-vial" style="color: #0e587f;"></i></a>
                <a href=""><i class="fa-regular fa-hospital" style="color: #0e587f;"></i></i></a>
                <a href=""><i class="fa-solid fa-suitcase-medical" style="color: #0e587f;"></i></a>
              </div>
            </div>
          </section>

          <section class="info_section">
            <div class="container_info">
              <div class="info_top">
                <div class="info_logo">
                  <a href="">
                    <img src="logo.jpg" alt="">
                  </a>
                </div>
                <div class="info_form">
                  <form action="">
                    <input type="email" placeholder="Your email">
                    <button>
                      Subscribe
                    </button>
                  </form>
                </div>
              </div>
              <div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                  <div class="col-md-6 col-lg-3">
                    <h5 style="margin-top: 2rem;">
                      Address
                    </h5>
                    <div class="info_contact">
                      <a href="https://maps.app.goo.gl/BQrSfjMPuxy1PhDx7">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                          Location
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                          Call 021-5732241
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-envelope"></i>
                        <span>
                          rsandrawinata@gmail.com
                        </span>
                      </a>
                    </div>
                    <div class="social_box">
                      <a href="">
                        <i class="fa-brands fa-facebook" style="color: #74C0FC;"></i>
                      </a>
                      <a href="">
                        <i class="fa-brands fa-x-twitter"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="info_links">
                      <h5>
                        Useful link
                      </h5>
                      <div class="info_links_menu">
                        <a class="active" href="index.html">
                          Home
                        </a>
                        <a href="about.html">
                          About
                        </a>
                        <a href="treatment.html">
                          Treatment
                        </a>
                        <a href="doctor.html">
                          Doctors
                        </a>
                        <a href="testimonial.html">
                          Testimonial
                        </a>
                        <a href="contact.html">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                      <h5>
                        LATEST POSTS
                      </h5>
                      <div class="post_box">
                        <div class="img-box">
                          <img src="images/post1.jpg" alt="">
                        </div>
                        <p>
                          Normal
                          distribution
                        </p>
                      </div>
                      <div class="post_box">
                        <div class="img-box">
                          <img src="images/post2.jpg" alt="">
                        </div>
                        <p>
                          Normal
                          distribution
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                      <h5>
                        News
                      </h5>
                      <div class="post_box">
                        <div class="img-box">
                          <img src="images/post3.jpg" alt="">
                        </div>
                        <p>
                          Normal
                          distribution
                        </p>
                      </div>
                      <div class="post_box">
                        <div class="img-box">
                          <img src="images/post4.png" alt="">
                        </div>
                        <p>
                          Normal
                          distribution
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <footer class="footer_section">
            <div class="container_footer">
              <p> Copyright
                &copy; 2024 -<span id="displayYear"></span>
                <a>www.rsandrawinata.co.id All rights reserved.</a>
              </p>
            </div>
          </footer>

    </body>

    </html>
@endsection