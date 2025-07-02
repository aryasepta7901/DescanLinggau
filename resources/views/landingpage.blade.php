<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sebiduk Linggau </title>
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

    <header id="header" class="header d-flex align-items-center fixed-top" style="height: 100px;">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Logo deret: BPS, BERAKHLAK, Bangga Melayani Bangsa -->
                <!-- Logo deret: BPS, BERAKHLAK, Bangga Melayani Bangsa, Linggau -->
                <div class="d-flex align-items-center me-3">
                    <img src="{{ asset('template/landingPage') }}/assets/img/bps.png" alt="Logo BPS"
                        style="height: 55px; margin-right: 12px;">
                    <img src="{{ asset('template/landingPage') }}/assets/img/logolinggau.png" alt="Logo Linggau"
                        style="height: 60px; margin-right: 12px;">
                    <img src="{{ asset('template/landingPage') }}/assets/img/logojuara.png" alt="Logo Linggau"
                        style="height: 60px; margin-right: 12px;">

                    <img src="{{ asset('template/landingPage') }}/assets/img/logose.png" alt="Logo BPS"
                        style="height: 55px;" class="d-none d-md-block">
                    <img src="{{ asset('template/landingPage') }}/assets/img/satu-data-putih.png" alt="Logo BPS"
                        style="height: 53px; margin-bottom: 12px;" class="d-none d-md-block">
                    <!-- Disembunyikan di tampilan mobile -->
                    <!-- Disembunyikan di tampilan mobile -->
                    <img src="{{ asset('template/landingPage') }}/assets/img/banggamelayanibangsa.png"
                        alt="Logo Bangga Melayani Bangsa" class="d-none d-md-block"
                        style="height: 50px; width: auto; margin-right: 12px;">

                    <img src="{{ asset('template/landingPage') }}/assets/img/berakhlak.png" alt="Logo BERAKHLAK"
                        class="d-none d-md-block" style="height: 55px; margin-right: 12px; margin-bottom: 12px;">

                </div>

                {{-- <h1 class="sitename m-0" style="font-size: 2rem;">SEBIDUK LINGGAU</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="dashboard">Dashboard Data</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>



    <main class="main">

        <!-- Hero Section -->
        <section id="home" class="hero section dark-background">
            <img src="{{ asset('template/landingPage') }}/assets/img/design2.png" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('template/landingPage') }}/assets/img/logosebiduklinggau.png"
                            class="img-fluid animated">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center">

                        <h1 id="Element1"></h1>
                        <h4 class="mb-3" id="Element2"></h4>

                        {{-- <p style="color: #000000" data-aos="fade-up" data-aos-delay="300">Program kolaborasi dengan
                            Kelurahan di Kota Lubuk Linggau Untuk
                            Mendorong
                            Penggunaan Data
                            Akurat Dalam Pembangunan Kelurahan</p> --}}
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=q9BYxUJ-4z4"
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
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="{{ asset('template/landingPage') }}/assets/img/satu-data.png" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>SATU DATA INDONESIA</h3>
                        {{-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                        <p>
                            Satu Data adalah kebijakan tata kelola data pemerintah yang bertujuan untuk menghasilkan
                            data yang akurat, mutakhir, terpadu, dapat dipertanggungjawabkan, serta mudah diakses dan
                            dibagikan antara instansi pusat dan daerah. Satu Data bertujuan untuk meningkatkan
                            efektivitas pengambilan keputusan dan mendukung pembangunan nasional.
                        </p>
                    </div>
                </div><!-- Features Item -->
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('template/landingPage') }}/assets/img/descanBPS.png" class="img-fluid"
                            alt="" style="width: 70%; height: auto;">
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
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="{{ asset('template/landingPage') }}/assets/img/sebiduklinggau.png"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7
                            order-2 order-md-1" data-aos="fade-up"
                        data-aos-delay="200">
                        <h3>SEBIDUK LINGGAU</h3>
                        <p class="fst-italic fw-bold">
                            SATU Biduk, SATU Data, SATU Tujuan
                        </p>
                        <p>
                            Sebiduk berarti satu perahu atau satu wadah. Berasal dari peribahasa Sebiduk Semare yang
                            berarti satu
                            perahu satu tujuan. Cocok dengan tujuan pembuatan sistem untuk menjadi wadah dari data
                            kelurahan.
                        </p>
                    </div>
                </div><!-- Features Item -->

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
                        <label for="kecamatanSelect" class="form-label">Pilih Kecamatan</label>
                        <select id="kecamatanSelect" class="form-select">
                            <option value="">-- Pilih Kecamatan --</option>
                            {{-- <option value="LUBUK LINGGAU BARAT I">LUBUK LINGGAU BARAT I</option>
                            <option value="LUBUK LINGGAU BARAT Ii">LUBUK LINGGAU BARAT II</option>
                            <option value="LUBUK LINGGAU SELATAN I">LUBUK LINGGAU SELATAN I</option>
                            <option value="LUBUK LINGGAU SELATAN II">LUBUK LINGGAU SELATAN II</option>
                            <option value="LUBUK LINGGAU TIMUR I">LUBUK LINGGAU TIMUR I</option>
                            <option value="LUBUK LINGGAU TIMUR II">LUBUK LINGGAU TIMUR II</option>
                            <option value="LUBUK LINGGAU UTARA I">LUBUK LINGGAU UTARA I</option>
                            <option value="LUBUK LINGGAU UTARA II">LUBUK LINGGAU UTARA II</option> --}}
                        </select>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <label for="kelurahanSelect" class="form-label">Pilih Kelurahan</label>
                        <select id="kelurahanSelect" class="form-select">
                            <option value="">-- Pilih Kelurahan --</option>
                            {{-- <option value="SIDOREJO">SIDOREJO</option>
                            <option value="TAPAK LEBAR">TAPAK LEBAR</option>
                            <option value="ULAK LEBAR">ULAK LEBAR</option>
                            <option value="BANDUNG KANAN">BANDUNG KANAN</option>
                            <option value="KEPUTRAAN">KEPUTRAAN</option>
                            <option value="LUBUKLINGGAU ULU">LUBUKLINGGAU ULU</option>
                            <option value="LUBUKLINGGAU ILIR">LUBUKLINGGAU ILIR</option>
                            <option value="PASAR PERMIRI">PASAR PERMIRI</option> --}}

                        </select>
                    </div>
                </div>

                <!-- Konten Default (Kosong Awal) -->
                <div id="default-message" class="indikator-konten" data-aos="fade-up" data-aos-delay="50">
                    <div class="text-center py-5 instruction-box">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
             10-4.48 10-10S17.52 2 12 2zm.75 15h-1.5v-6h1.5v6zm0-8h-1.5V7h1.5v2z" />
                        </svg>
                        <h5>Silakan pilih Kecamatan dan Kelurahan</h5>
                        <p class="text-muted">Untuk Menampilkan Ringkasan Data dan Statistik Dasar Kelurahan, Silahkan
                            Pilih Kecamatan dan Kelurahan tertentu</p>
                    </div>
                </div>
                <div id="content-wrapper" style="display: none;">
                    <!-- Tambahkan Features di sini -->
                    <!-- Fitur tambahan di dalam section details -->
                    <div class="features">
                        <div class="row gy-4 mb-4">
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="features-item">
                                    <i class="bi bi-geo-alt" style="color: #ffbb2c;"></i>
                                    <p><a href="#">SIDOREJO</a></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="features-item">
                                    <i class="bi bi-building" style="color: #5578ff;"></i>
                                    <p><a href="#">2,705 Hektare</a></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="features-item">
                                    <i class="bi bi-people" style="color: #e80368;"></i>
                                    <p><a href="#">3.395 Jumlah Penduduk</a></p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="features-item">
                                    <i class="bi bi-geo-fill" style="color: #e361ff;"></i>
                                    <p><a href="#">xxxx</a></p>
                                </div>
                            </div> --}}
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
                                <div id="chart" class="card-body" style="height: 300px">

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Pie Chart -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Persentase Penduduk Kelurahan Sidorejo
                                        Menurut Ijazah Tertinggi yang Ditamatkan</h3>

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
                                    <h3 class="card-title">Jumlah Sekolah Menurut Jenjang Pendidikan</h3>

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
                                <div id="piechart2" class="card-body">

                                </div>

                            </div>
                        </div>


                    </div>
                </div>






            </div>


        </section><!-- /Details Section -->

        {{-- <!-- Faq Section -->
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

        </section><!-- /Faq Section --> --}}


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
                        <li><a href="https://lubuklinggaukota.bps.go.id/" target="_blank">Website BPS Kota Lubuk
                                Linggau</a></li>
                        <li><a href="https://pst.bps.go.id/" target="_blank">Pelayanan Statistik Terpadu Digital</a>
                        </li>
                        <li><a href="https://romantik.web.bps.go.id/" target="_blank">Rekomendasi Statistik</a></li>
                        <li><a href="https://indah.bps.go.id/" target="_blank">Indonesia Data HUB</a></li>
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
        new TypeIt("#Element1", {
            strings: ["Selamat Datang di <span>SEBIDUK LINGGAU</span>"],
            speed: 100,
            html: true,
            waitUntilVisible: true,
            afterComplete: (step, instance) => {
                // instance.destroy(); // komentar dulu
                new TypeIt("#Element2", {
                    strings: ["SATU BASIS DATA STATISTIK UNGGUL KELURAHAN LUBUK LINGGAU"],
                    speed: 100,
                    waitUntilVisible: true
                }).go();
            }
        }).go();
    </script>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                data: [1718, 1677]
            }],
            chart: {
                type: 'bar',
                width: '100%'
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
            series: [141, 262, 268, 275, 739],
            chart: {
                type: 'pie',
                height: 350,
                width: '100%',
                toolbar: {
                    show: true, // Tampilkan toolbar
                    tools: {
                        download: true, // Aktifkan tombol download
                    }
                },
            },
            labels: [
                'Tidak Tamat SD',
                'SD/Sederajat',
                'SMP/Sederajat',
                'Perguruan Tinggi/Sederajat',
                'SMA/Sederajat'
            ],

            responsive: [{
                    breakpoint: 768,
                    options: {
                        chart: {
                            height: 280,
                            width: '100%'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                },
                {
                    breakpoint: 480,
                    options: {
                        chart: {
                            height: 220,
                            width: '100%'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            ]
        };


        var chart = new ApexCharts(document.querySelector("#piechart"), options);
        chart.render();
    </script>
    <script>
        var options = {
            series: [1, 2, 2],
            chart: {
                type: 'pie',
                height: 350,
                width: '100%',
                toolbar: {
                    show: true, // Tampilkan toolbar
                    tools: {
                        download: true, // Aktifkan tombol download
                    }
                },
            },
            labels: [
                'Praktik Dokter',
                'Praktik Bidan',
                'Posyandu',
            ],

            responsive: [{
                    breakpoint: 768,
                    options: {
                        chart: {
                            height: 280,
                            width: '100%'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                },
                {
                    breakpoint: 480,
                    options: {
                        chart: {
                            height: 220,
                            width: '100%'
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            ]
        };


        var chart = new ApexCharts(document.querySelector("#piechart2"), options);
        chart.render();
    </script>
    <script>
        var options = {
            series: [{
                name: 'DATA',
                data: [3, 4, 0, 1, 0, 0]
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
                // formatter: function(val) {
                //     return val + "%";
                // },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },

            xaxis: {
                categories: ["TK/RA/BA", "SD/MI", "SMP/MTs", "SMA/MA", "SMK/MAK", "PERGURUAN TINGGI"],
                position: 'bottom',
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    rotate: -90, // Ini membuat tulisan vertikal ke bawah
                    style: {
                        fontSize: '12px'
                    }
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


    {{-- Script Peta dan tampil ringkas data --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const kecamatanSelect = document.getElementById('kecamatanSelect');
            const kelurahanSelect = document.getElementById('kelurahanSelect');
            const contentWrapper = document.getElementById('content-wrapper');
            const defaultMessage = document.getElementById('default-message');

            var map = L.map('map').setView([-3.2993573601203274, 102.85836231521746], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var kecamatanLayer = L.layerGroup().addTo(map);
            var desaLayer = L.layerGroup().addTo(map);
            var geojsonDesaLayer;

            async function updateMap() {
                const kecamatanVal = kecamatanSelect.value.toUpperCase();
                const kelurahanVal = kelurahanSelect.value.toUpperCase();

                kecamatanLayer.clearLayers();
                desaLayer.clearLayers();

                if (kecamatanVal && kelurahanVal) {
                    try {
                        const resKec = await fetch('wilayah/kec_1674.json');
                        const dataKec = await resKec.json();
                        const filteredKec = {
                            type: "FeatureCollection",
                            features: dataKec.features.filter(f => f.properties.nmkec.toUpperCase() ===
                                kecamatanVal)
                        };
                        L.geoJSON(filteredKec, {
                            style: {
                                color: "red",
                                weight: 2,
                                fillOpacity: 0
                            },
                            onEachFeature: (feature, layer) => {
                                layer.bindPopup("Kecamatan: " + feature.properties.nmkec);
                            }
                        }).addTo(kecamatanLayer);

                        const resDesa = await fetch('wilayah/desa_1674.json');
                        const dataDesa = await resDesa.json();
                        const filteredDesa = {
                            type: "FeatureCollection",
                            features: dataDesa.features.filter(f =>
                                f.properties.nmkec.toUpperCase() === kecamatanVal &&
                                f.properties.nmdesa.toUpperCase() === kelurahanVal
                            )
                        };

                        function getColor(nama) {
                            let hash = 0;
                            for (let i = 0; i < nama.length; i++) {
                                hash = nama.charCodeAt(i) + ((hash << 5) - hash);
                            }
                            let color = '#';
                            for (let i = 0; i < 3; i++) {
                                let value = (hash >> (i * 8)) & 0xFF;
                                color += ('00' + value.toString(16)).slice(-2);
                            }
                            return color;
                        }

                        geojsonDesaLayer = L.geoJSON(filteredDesa, {
                            style: feature => ({
                                color: getColor(feature.properties.nmdesa),
                                weight: 1,
                                fillOpacity: 0.4
                            }),
                            onEachFeature: (feature, layer) => {
                                layer.bindPopup("<b>Kelurahan:</b> " + feature.properties.nmdesa +
                                    "<br><b>Kecamatan:</b> " + feature.properties.nmkec);
                            }
                        }).addTo(desaLayer);

                        // Panggil invalidateSize dulu
                        map.invalidateSize();

                        setTimeout(() => {
                            if (filteredDesa.features.length > 0) {
                                const bounds = geojsonDesaLayer.getBounds();
                                if (bounds.isValid()) {
                                    map.fitBounds(bounds, {
                                        maxZoom: 15,
                                        padding: [50, 50]
                                    });
                                }
                            }
                        }, 200); // kasih delay supaya peta ready

                    } catch (err) {
                        console.error('Error loading GeoJSON:', err);
                    }
                }
            }

            function updateDisplay() {
                if (kecamatanSelect.value && kelurahanSelect.value) {
                    contentWrapper.style.display = 'block';
                    defaultMessage.style.display = 'none';
                    setTimeout(updateMap, 150); // delay supaya container visible dulu
                } else {
                    contentWrapper.style.display = 'none';
                    defaultMessage.style.display = 'block';
                }
            }

            kecamatanSelect.addEventListener('change', () => {
                kelurahanSelect.value = "";
                updateDisplay();
            });
            kelurahanSelect.addEventListener('change', updateDisplay);

            updateDisplay();
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            const kecamatanSelect = document.getElementById('kecamatanSelect');
            const kelurahanSelect = document.getElementById('kelurahanSelect');
            const contentWrapper = document.getElementById('content-wrapper');
            const defaultMessage = document.getElementById('default-message');

            // Inisialisasi peta
            const map = L.map('map').setView([-3.2993573601203274, 102.85836231521746], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap'
            }).addTo(map);

            const kecamatanLayer = L.layerGroup().addTo(map);
            const desaLayer = L.layerGroup().addTo(map);

            // Load data kecamatan dan desa
            const [dataKecRes, dataDesaRes] = await Promise.all([
                fetch('wilayah/kec_1674.json'),
                fetch('wilayah/desa_1674.json')
            ]);
            const dataKecamatan = await dataKecRes.json();
            const dataDesa = await dataDesaRes.json();

            // Isi dropdown Kecamatan
            const sortedKecamatan = dataKecamatan.features
                .map(f => ({
                    kode: f.properties.kdkec,
                    nama: f.properties.nmkec
                }))
                .filter((value, index, self) =>
                    index === self.findIndex(v => v.nama === value.nama)) // hilangkan duplikat berdasarkan nama
                .sort((a, b) => a.kode.localeCompare(b.kode)); // urut berdasarkan kdkec

            sortedKecamatan.forEach(item => {
                const option = document.createElement('option');
                option.value = item.nama;
                option.textContent = item.nama;
                kecamatanSelect.appendChild(option);
            });

            // Fungsi untuk isi dropdown Kelurahan berdasarkan kecamatan yang dipilih
            function populateKelurahan(kecamatanName) {
                kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
                kelurahanSelect.disabled = true;

                const filteredKelurahan = dataDesa.features
                    .filter(f => f.properties.nmkec === kecamatanName)
                    .map(f => ({
                        kode: f.properties.kddesa,
                        nama: f.properties.nmdesa
                    }))
                    .filter((value, index, self) =>
                        index === self.findIndex(v => v.nama === value.nama)) // hilangkan duplikat
                    .sort((a, b) => a.kode.localeCompare(b.kode)); // urut berdasar kddesa

                filteredKelurahan.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.nama;
                    option.textContent = item.nama;
                    kelurahanSelect.appendChild(option);
                });

                kelurahanSelect.disabled = filteredKelurahan.length === 0;
            }


            function clearLayers() {
                kecamatanLayer.clearLayers();
                desaLayer.clearLayers();
            }

            async function updateMap() {
                clearLayers();

                const kecamatanVal = kecamatanSelect.value;
                const kelurahanVal = kelurahanSelect.value;

                if (!kecamatanVal || !kelurahanVal) return;

                // Filter kecamatan dan tampilkan
                const filteredKec = {
                    type: "FeatureCollection",
                    features: dataKecamatan.features.filter(f => f.properties.nmkec === kecamatanVal)
                };
                L.geoJSON(filteredKec, {
                    style: {
                        color: 'red',
                        weight: 2,
                        fillOpacity: 0
                    },
                    onEachFeature: (feature, layer) => {
                        layer.bindPopup('Kecamatan: ' + feature.properties.nmkec);
                    }
                }).addTo(kecamatanLayer);

                // Filter desa / kelurahan dan tampilkan
                const filteredDesa = {
                    type: "FeatureCollection",
                    features: dataDesa.features.filter(f =>
                        f.properties.nmkec === kecamatanVal && f.properties.nmdesa === kelurahanVal
                    )
                };

                function getColor(nama) {
                    let hash = 0;
                    for (let i = 0; i < nama.length; i++) {
                        hash = nama.charCodeAt(i) + ((hash << 5) - hash);
                    }
                    let color = '#';
                    for (let i = 0; i < 3; i++) {
                        let value = (hash >> (i * 8)) & 0xFF;
                        color += ('00' + value.toString(16)).slice(-2);
                    }
                    return color;
                }

                L.geoJSON(filteredDesa, {
                    style: feature => ({
                        color: getColor(feature.properties.nmdesa),
                        weight: 1,
                        fillOpacity: 0.4
                    }),
                    onEachFeature: (feature, layer) => {
                        layer.bindPopup(
                            `<b>Kelurahan:</b> ${feature.properties.nmdesa}<br><b>Kecamatan:</b> ${feature.properties.nmkec}`
                        );
                    }
                }).addTo(desaLayer);

                map.invalidateSize();

                setTimeout(() => {
                    const bounds = L.geoJSON(filteredDesa).getBounds();
                    if (bounds.isValid()) {
                        map.fitBounds(bounds.pad(0.3), {
                            maxZoom: 15
                        });
                    }
                }, 200);
            }

            // Event change Kecamatan
            kecamatanSelect.addEventListener('change', () => {
                kelurahanSelect.value = '';
                clearLayers();
                if (kecamatanSelect.value) {
                    populateKelurahan(kecamatanSelect.value);
                    kelurahanSelect.disabled = false;
                } else {
                    kelurahanSelect.disabled = true;
                }
                updateUI();
            });

            // Event change Kelurahan
            kelurahanSelect.addEventListener('change', () => {
                updateUI();
            });

            function updateUI() {
                if (kecamatanSelect.value && kelurahanSelect.value) {
                    contentWrapper.style.display = 'block';
                    defaultMessage.style.display = 'none';
                    updateMap();
                } else {
                    contentWrapper.style.display = 'none';
                    defaultMessage.style.display = 'block';
                    clearLayers();
                }
            }

            // Inisialisasi UI
            kelurahanSelect.disabled = true;
            updateUI();

        });
    </script>

</body>

</html>
