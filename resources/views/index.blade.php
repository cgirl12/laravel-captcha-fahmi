<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>brainwaveio | Landing Page Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="content">
        <nav class="navbar navbar-expand-md fixed-top" id="navbar" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
          <div class="container-fluid px-0"><a href="/"><img class="navbar-brand w-75 d-md-none" src="{{ asset('image/logo.png')}}" alt="logo" style="height: 60px"/></a><a class="navbar-brand fw-bold d-none d-md-block" href="/"><img src="{{ asset('image/logo.png')}}" alt="" style="height: 60px;"></a><button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbar-content" data-navbar-collapse="data-navbar-collapse">
              <ul class="navbar-nav gap-md-2 gap-lg-3 pt-x1 pb-1 pt-md-0 pb-md-0" data-navbar-nav="data-navbar-nav">
                <li class="nav-item"> <a class="nav-link lh-xl" href="#home">Home</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#about">About us</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#service">Support</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#pricing">Pricing</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#contact">Contact</a></li>
                @if (Route::has('login'))
                      @auth
                          <li><a href="{{ url('/dashboard') }}" class="btn btn-primary btn-sm">Dasboard</a></li>
                      @else
                          <li><a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a></li>
        
                          @if (Route::has('register'))
                              <li><a href="{{ route('register') }}" id="register" class="btn btn-primary btn-sm">Register</a></li>
                          @endif
                      @endauth
                @endif
              </ul>
            </div>
          </div>
        </nav>
        <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
          <section class="hero-section overflow-hidden position-relative z-0 mb-4 mb-lg-0" id="home">
            <div class="hero-background">
              <div class="container">
                <div class="row gy-4 gy-md-8 pt-9 pt-lg-0">
                  <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="fs-2 fs-lg-1 text-white fw-bold mb-2 mb-lg-x1 lh-base mt-3 mt-lg-0">
                      Manage your remote <span class="text-nowrap">team work</span>
                    </h1>
                    <p class="fs-8 text-white mb-3 mb-lg-4 lh-lg">
                      With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                      <a class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7" href="#">Explore more</a>
                    </div>
                  </div>
                  <div class="col-lg-5 position-lg-relative">
                    <div class="card p-2 shadow-lg" style="box-shadow: 0px 4px 10px #f71C1C; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
                      <form id="qr-form" action="{{ route('generate-qr-code') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="textInput" class="form-label text-white">Masukkan Teks</label>
                          <input type="text" class="form-control text-white bg-transparent" id="qr-input" name="qrCode" placeholder="Masukkan teks...">
                        </div>
                        <div class="mb-3">
                          <label for="selectOption" class="form-label text-white">Pilih Opsi</label>
                          <select class="form-select text-white bg-transparent" id="size" name="size">
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                          </select>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-md lh-xl mb-2">Generate</button>
                          @if (Session::has('qrCode'))
                            <div class="result">
                                {!! Session::get('qrCode') !!}
                            </div>
                          @endif
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute bottom-0 start-0 end-0 z-1">
              <img class="wave mb-md-n2" src="assets/img/illustrations/Wave.svg" alt="" />
              <div class="bg-white py-2 py-md-5"></div>
            </div>
          </section>
          

        </div><button class="btn scroll-to-top text-white rounded-circle d-flex justify-content-center align-items-center bg-primary" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up"></span></button>
        <footer class="pt-7 pt-lg-8">
          <div class="container">
            <div class="row gy-4 g-md-3 border-bottom pb-8 pb-lg-9 justify-content-center">
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg ls-1">Company</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#about">About us</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#contact"> Contact us</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Careers</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Press</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg">Product</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Features</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Pricing</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> News</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Help desk</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!"> Support</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg"> Legal</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Privacy</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Terms & Conditions</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Return Policy</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 d-md-flex flex-column align-items-md-end pe-md-0">
                <div>
                  <p class="mb-2 lh-lg"> Download Our App</p>
                  <div class="mb-1 mb-lg-2"> <a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"> <img class="img-fluid" src="assets/img/logos/App_Store.webp" alt="assets/img/logos/App_Store.webp" /></a></div><a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"> <img class="img-fluid" src="assets/img/logos/Play_Store.webp" alt="assets/img/logos/Play_Store.webp" /></a>
                </div>
              </div>
            </div>
            <div class="row gy-2 py-3 justify-content-center justify-content-md-between">
              <div class="col-auto ps-0">
                <p class="text-center text-md-start lh-xl text-1100"> © 2024 Copyright, All Right Reserved, Made by <a class="fw-semi-bold" href="https://themewagon.com/"><img src="{{ asset('image/logo-light.png')}}" alt="" style="height: 35px; border-radius: 50%"></a></p>
              </div>
              <div class="col-auto pe-0"><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-twitter"> </span></a><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-instagram"></span></a><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-linkedin"> </span></a></div>
            </div>
          </div>
        </footer>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->



    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
  </body>

</html>