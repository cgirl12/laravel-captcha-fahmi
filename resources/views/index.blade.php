<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>QR Code Generator</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><span style="color: #004aad;">W</span>ahyu<span style="color: #fad02c;">.</span> </h2>

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home<br></a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @if (Route::has('login'))
          <nav class="-mx-3 flex flex-1 justify-end">
              @auth
                  <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" >
                      Dashboard
                  </a>
              @else
                  <a class="btn-getin" href="{{ route('login') }}">Sign In</a>

                  @if (Route::has('register'))
                      <a class="btn-getstarted" href="{{ route('register') }}">Sign Up</a>
                  @endif
              @endauth
          </nav>
      @endif

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="position: relative; display: inline-block;">

      <img src="assets/img/hero-bg4.jpg" alt="" class="hero-bg" data-aos="fade-in" style="width: 100%; height: auto; display: block;">
      <div class="hero-overlay"></div>

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Welcome To <br> <span>QR Code Generator</span></h2>
            <p data-aos="fade-up" data-aos-delay="100">Effortlessly generate your text or URL with ease!</p>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
              
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="day" class="purecounter"></span>
                  <p>Day</p>
                </div>
              </div>
              
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="hours" class="purecounter"></span>
                  <p>Hours</p>
                </div>
              </div>
              
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="minutes" class="purecounter"></span>
                  <p>Minutes</p>
                </div>
              </div>
              
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="seconds" class="purecounter"></span>
                  <p>Seconds</p>
                </div>
              </div>              

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 card glassmorphism shadow-lg border-0 rounded-lg" data-aos="zoom-out">
              <!-- From Uiverse.io by ilkhoeri --> 
              <div class="terminal">
                <hgroup class="head">
                  <p class="title">
                    <svg
                      width="16px"
                      height="16px"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      stroke-linejoin="round"
                      stroke-linecap="round"
                      stroke-width="2"
                      stroke="currentColor"
                      fill="none"
                    >
                      <path
                        d="M7 15L10 12L7 9M13 15H17M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                      ></path>
                    </svg>
                    Terminal
                  </p>

                  <button class="copy_toggle" tabindex="-1" type="button">
                    <svg
                      width="16px"
                      height="16px"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      stroke-linejoin="round"
                      stroke-linecap="round"
                      stroke-width="2"
                      stroke="currentColor"
                      fill="none"
                    >
                      <path
                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"
                      ></path>
                      <path
                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"
                      ></path>
                    </svg>
                  </button>
                </hgroup>

                <div class="body">
                  <pre class="pre">          <code>-&nbsp;</code>
                    <code>git&nbsp;</code>
                    <code class="cmd" data-cmd="generate-qrcode-200"></code>
                  </pre>
                  <div class="text-center">
                    @if(isset($qrCode))
                        {!! $qrCode !!}
                    @endif
                  </div>
                </div>
              </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
  </main>

  <style>
    /* From Uiverse.io by ilkhoeri */ 
.card {
  padding: 1rem;
  overflow: hidden;
  border: 1px solid #c5c5c5;
  border-radius: 12px;
  background-color: #d9d9d92f;
  backdrop-filter: blur(8px);
  min-width: 344px;
}
.wrap {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  position: relative;
  z-index: 10;
  border: 0.5px solid #525252;
  border-radius: 8px;
  overflow: hidden;
}
.terminal {
  display: flex;
  flex-direction: column;

  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
    "Liberation Mono", "Courier New", monospace;
}
.head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  overflow: hidden;
  min-height: 40px;
  padding-inline: 12px;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  background-color: #202425;
}
.title {
  display: flex;
  align-items: center;
  gap: 8px;
  height: 2.5rem;
  user-select: none;
  font-weight: 600;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #8e8e8e;
}
.title > svg {
  height: 18px;
  width: 18px;
  margin-top: 2px;
  color: #006adc;
}
.copy_toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.25rem;
  border: 0.65px solid #c1c2c5;
  margin-left: auto;
  border-radius: 6px;
  background-color: #202425;
  color: #8e8e8e;
  cursor: pointer;
}
.copy_toggle > svg {
  width: 20px;
  height: 20px;
}
.copy_toggle:active > svg > path,
.copy_toggle:focus-within > svg > path {
  animation: clipboard-check 500ms linear forwards;
}
.body {
  display: flex;
  flex-direction: column;
  position: relative;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  overflow-x: auto;
  padding: 1rem;
  line-height: 19px;
  color: white;
  background-color: black;
  white-space: nowrap;
}
.pre {
  display: flex;
  flex-direction: row;
  align-items: center;
  text-wrap: nowrap;
  white-space: pre;
  background-color: transparent;
  overflow: hidden;
  box-sizing: border-box;
  font-size: 16px;
}
.pre code:nth-child(1) {
  color: #575757;
}
.pre code:nth-child(2) {
  color: #e34ba9;
}
.cmd {
  height: 19px;
  position: relative;
  display: flex;
  align-items: center;
  flex-direction: row;
}
.cmd::before {
  content: attr(data-cmd);
  position: relative;
  display: block;
  white-space: nowrap;
  overflow: hidden;
  background-color: transparent;
  animation: inputs 8s steps(22) infinite;
}
.cmd::after {
  content: "";
  position: relative;
  display: block;
  height: 100%;
  overflow: hidden;
  background-color: transparent;
  border-right: 0.15em solid #e34ba9;
  animation: cursor 0.5s step-end infinite alternate, blinking 0.5s infinite;
}

@keyframes blinking {
  20%,
  80% {
    transform: scaleY(1);
  }
  50% {
    transform: scaleY(0);
  }
}
@keyframes cursor {
  50% {
    border-right-color: transparent;
  }
}
@keyframes inputs {
  0%,
  100% {
    width: 0;
  }
  10%,
  90% {
    width: 58px;
  }
  30%,
  70% {
    width: 215px;
    max-width: max-content;
  }
}
@keyframes clipboard-check {
  100% {
    color: #fff;
    d: path(
      "M 9 5 H 7 a 2 2 0 0 0 -2 2 v 12 a 2 2 0 0 0 2 2 h 10 a 2 2 0 0 0 2 -2 V 7 a 2 2 0 0 0 -2 -2 h -2 M 9 5 a 2 2 0 0 0 2 2 h 2 a 2 2 0 0 0 2 -2 M 9 5 a 2 2 0 0 1 2 -2 h 2 a 2 2 0 0 1 2 2 m -6 9 l 2 2 l 4 -4"
    );
  }
}

  </style>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename"><span style="color: #004aad;">W</span>ahyu<span style="color: #fad02c;">.</span> </span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Logis</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function updateDateTime() {
        const now = new Date();
  
        // Daftar nama hari dalam bahasa Indonesia
        const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  
        // Ambil informasi waktu
        const day = days[now.getDay()]; // Ambil nama hari
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
  
        // Update elemen dengan ID yang sesuai
        document.getElementById("day").textContent = day;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
    }
  
    // Jalankan setiap detik
    setInterval(updateDateTime, 1000);
    updateDateTime(); // Panggil sekali agar langsung muncul saat halaman dimuat
  </script>  
  
</body>

</html>