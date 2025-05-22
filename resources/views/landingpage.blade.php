<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KBS </title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('template/landingPage') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('template/landingPage') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/landingPage') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template/landingPage') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template/landingPage') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('template/landingPage') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('template/landingPage') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template/landingPage') }}/assets/css/main.css" rel="stylesheet">
    {{-- leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('template/landingPage') }}/assets/img/logo.png" alt=""> -->
                <h1 class="sitename">KBS</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="dashboard">Dashboard Data</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="home" class="hero section dark-background">
            <img src="{{ asset('template/landingPage') }}/assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('template/landingPage') }}/assets/img/logolinggau.png"
                            class="img-fluid animated" alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center">
                        <h1 id="myElement">Selamat Datang di <span>Kelurahan Bumi Silampari</span></h1>
                        {{-- <p style="color: #000000" data-aos="fade-up" data-aos-delay="300">Program kolaborasi dengan
                            Kelurahan di Kota Lubuk Linggau Untuk
                            Mendorong
                            Penggunaan Data
                            Akurat Dalam Pembangunan Kelurahan</p> --}}
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>

                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- /Hero Section -->
        <!-- Tentang Kami Section -->
        <section id="about" class="details section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
                <p><span>Temukan informasi yang Anda cari disini!
                    </span> </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('template/landingPage') }}/assets/img/descanBPS.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
                        <h4 class="fst-italic text-center">
                            Desa Cantik adalah program kolaborasi dengan kelurahan untuk meningkatkan kesadaran dan
                            pemahaman
                            tentang pentingnya data statistik dalam pengambilan keputusan desa. Kami percaya, dengan
                            data yang tepat, kelurahan bisa berkembang lebih cepat
                        </h4>

                    </div>
                </div><!-- Features Item -->

                {{-- <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="{{ asset('template/landingPage') }}/assets/img/details-2.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div><!-- Features Item --> --}}

                {{-- <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="{{ asset('template/landingPage') }}/assets/img/details-3.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe
                            odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span></li>
                            <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad
                                    fugiat</span>.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="{{ asset('template/landingPage') }}/assets/img/details-4.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div><!-- Features Item --> --}}

            </div>

        </section><!-- /Details Section -->
        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center text-center">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Kecamatan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-building"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="72" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Kelurahan</p>
                        </div>
                    </div><!-- End Stats Item -->



                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Data Statisitk Section -->
        <section id="statistik" class="details section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Data Statistik</h2>
                <p><span>Data Statistik Kelurahan di Kota Lubuk Linggau
                    </span> </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                        <label for="kelurahanSelect" class="form-label">Pilih Kecamatan</label>
                        <select id="kelurahanSelect" class="form-select">
                            <option value="">-- Pilih Kecamatan --</option>
                            <option value="lubuk-kupang">Lubuk Kupang</option>
                            <option value="marga-rahayu">Marga Rahayu</option>
                            <option value="belalau">Belalau</option>
                            <option value="watervang">Watervang</option>
                            <option value="jogoboyo">Jogoboyo</option>
                            <option value="mesat-jaya">Mesat Jaya</option>
                        </select>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <label for="kelurahanSelect" class="form-label">Pilih Kelurahan</label>
                        <select id="kelurahanSelect" class="form-select">
                            <option value="">-- Pilih Kelurahan --</option>
                            <option value="lubuk-kupang">Lubuk Kupang</option>
                            <option value="marga-rahayu">Marga Rahayu</option>
                            <option value="belalau">Belalau</option>
                            <option value="watervang">Watervang</option>
                            <option value="jogoboyo">Jogoboyo</option>
                            <option value="mesat-jaya">Mesat Jaya</option>
                        </select>
                    </div>
                </div>


                <!-- Tambahkan Features di sini -->
                <!-- Fitur tambahan di dalam section details -->
                <div class="features">
                    <div class="row gy-4 mb-4">
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="features-item">
                                <i class="bi bi-geo-alt" style="color: #ffbb2c;"></i>
                                <p><a href="#">Lubuk Kupang</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="features-item">
                                <i class="bi bi-building" style="color: #5578ff;"></i>
                                <p><a href="#">xxx Hektare</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="features-item">
                                <i class="bi bi-people" style="color: #e80368;"></i>
                                <p><a href="#">8505 Jumlah Penduduk</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="features-item">
                                <i class="bi bi-geo-fill" style="color: #e361ff;"></i>
                                <p><a href="#">xxxx</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Inserted Features -->

                <!-- AREA CHART -->
                <div class="row" data-aos="fade-up" data-aos-delay="500">
                    <div style="height:300px" id="map" class="col-lg-10 mx-auto mb-3">

                    </div>

                    <div class="col-lg-6">
                        <!-- barchart -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Jumlah Penduduk</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="chart" class="card-body">

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pie Chart -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Prasarana Kesehatan</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="piechart" class="card-body">

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <!-- box Chart -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Data xxxx</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="barchart" class="card-body">

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 mt-3">
                        <!-- box Chart -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Data xxxx</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="linechart" class="card-body">

                            </div>

                        </div>
                    </div>
                </div>






            </div>


        </section><!-- /Details Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                        porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                        dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                        nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                        convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                                        quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('template/landingPage') }}/assets/img/faq.jpg" class="img-fluid"
                            alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->


    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-8 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">BPS Kota Lubuk Linggau</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>BPS Lubuklinggau MunicipalityPerumdam Road No. 01 Kelurahan Lubuk Tanjung Lubuklinggau</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>(0733) 323693</span></p>
                        <p><strong>Email:</strong> <span>bps1674@bps.go.id</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Website BPS Kota Lubuk Linggau</a></li>
                        <li><a href="#">Pelayanan Statistik Terpadu Digital</a></li>
                        <li><a href="#">Rekomendasi Statistik</a></li>
                        <li><a href="#">Indah HUB</a></li>
                        <li><a href="#">xxx</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Fungsi Integrasi Pengolahan Data (IPD) BPS Kota
                    Lubuk
                    Linggau. 2025</strong> <span>All Rights
                    Reserved</span></p>

        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/landingPage') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/landingPage') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('template/landingPage') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('template/landingPage') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('template/landingPage') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('template/landingPage') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('template/landingPage') }}/assets/js/main.js"></script>
    {{-- ChartJS --}}
    <!-- jQuery -->
    <script src="{{ asset('template/backend') }}/plugins/jquery/jquery.min.js"></script>

    <script src="https://unpkg.com/typeit/dist/index.umd.js"></script>
    <script>
        new TypeIt("#myElement", {}).go();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                data: [2500, 2000]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,

                }
            },
            dataLabels: {
                enabled: true
            },
            xaxis: {
                categories: ['Laki-Laki', 'Perempuan'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    <script>
        var options = {
            series: [44, 55, 13, 43, 22],
            chart: {
                width: 380,
                type: 'pie',
                height: 350
            },
            labels: ['A', 'B', 'C', 'D', 'E'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#piechart"), options);
        chart.render();
    </script>
    <script>
        var options = {
            series: [{
                name: 'Inflation',
                data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
            }],
            chart: {
                height: 350,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val + "%";
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },

            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                position: 'bottom',
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                crosshairs: {
                    fill: {
                        type: 'gradient',
                        gradient: {
                            colorFrom: '#D8E3F0',
                            colorTo: '#BED1E6',
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                        }
                    }
                },
                tooltip: {
                    enabled: true,
                }
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    // formatter: function(val) {
                    //     return val + "%";
                    // }
                }

            },

        };

        var chart = new ApexCharts(document.querySelector("#barchart"), options);
        chart.render();
    </script>
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#linechart"), options);
        chart.render();
    </script>
    <script>
        var map = L.map('map').setView([-3.2993573601203274, 102.85836231521746], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var polygon = L.polygon([
            [-3.2882817382767477, 102.85625088807906],
            [-3.303483340230974, 102.86696338116147],
            [-3.3021956841338524, 102.88090037048939],
            [-3.2905709355354413, 102.87516793271953],
        ]).addTo(map);
    </script>

</body>

</html>
