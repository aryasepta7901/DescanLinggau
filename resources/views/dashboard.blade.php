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

    <header id="header" class="header d-flex align-items-center fixed-top" style="height: 100px;">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Logo deret: BPS, BERAKHLAK, Bangga Melayani Bangsa -->
                <!-- Logo deret: BPS, BERAKHLAK, Bangga Melayani Bangsa, Linggau -->
                <div class="d-flex align-items-center me-3">
                    <img src="{{ asset('template/landingPage') }}/assets/img/bps.png" alt="Logo BPS"
                        style="height: 75px; margin-right: 12px;">

                    <!-- Disembunyikan di tampilan mobile -->
                    <img src="{{ asset('template/landingPage') }}/assets/img/berakhlak.png" alt="Logo BERAKHLAK"
                        class="d-none d-md-block" style="height: 75px; margin-right: 12px;">

                    <!-- Disembunyikan di tampilan mobile -->
                    <img src="{{ asset('template/landingPage') }}/assets/img/banggamelayanibangsa.png"
                        alt="Logo Bangga Melayani Bangsa" class="d-none d-md-block"
                        style="height: 150px; width: auto; margin-right: 12px;">

                    <img src="{{ asset('template/landingPage') }}/assets/img/logolinggau.png" alt="Logo Linggau"
                        style="height: 75px;">
                </div>

                <h1 class="sitename m-0" style="font-size: 2rem;">SEBIDUK LINGGAU</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="dashboard" class="active">Dashboard Data</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade">
            <div class="heading-section " style="padding-top: 100px;">
                <div class="heading-container d-flex align-items-center justify-content-between text-center flex-wrap">

                    <!-- Gambar Wakot di kiri -->
                    <img src="{{ asset('template/landingPage') }}/assets/img/walkot.png" alt="Walikota"
                        class="wakot-img img-fluid d-none d-md-block" width="300" style="margin: 50px;">

                    <!-- Teks di tengah -->
                    <div class="heading-text text-center mx-3 flex-grow-1">
                        <h1>Dashboard Data Kelurahan</h1>
                        <p>Pada halaman ini akan menampilkan data statistik kelurahan dengan isian tabel dan grafik yang
                            menarik.</p>
                    </div>

                    <!-- Gambar Wawakot di kanan -->
                    <img src="{{ asset('template/landingPage') }}/assets/img/wawakot.png" alt="Wakil Walikota"
                        class="wawakot-img img-fluid d-none d-md-block" width="330" style="margin: 50px;">
                </div>
            </div>
            {{-- <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Starter Page</li>
                    </ol>
                </div>
            </nav> --}}

        </div><!-- End Page Title -->

        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">

            <div class="container-fluid p-4">


                <div class="row mt-4">
                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar">
                        <h6>Tahun Data</h6>
                        <select class="form-select mb-3">
                            <option selected>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                        </select>

                        <h6>Wilayah</h6>
                        <!-- Tombol Wilayah -->
                        <div class="btn-group mb-3" role="group" id="wilayah-buttons">
                            <button type="button" class="btn btn-outline-primary active"
                                data-wilayah="kota">Kota</button>
                            <button type="button" class="btn btn-outline-primary"
                                data-wilayah="kecamatan">Kecamatan</button>
                            <button type="button" class="btn btn-outline-primary"
                                data-wilayah="kelurahan">Kelurahan</button>
                        </div>

                        <!-- Dropdown Kota -->
                        <div id="dropdown-kota" class="mb-2">
                            <select class="form-select" id="kotaselect">
                                <option selected>Lubuk Linggau</option>
                            </select>
                        </div>

                        <!-- Dropdown Kecamatan -->
                        <div id="dropdown-kecamatan" class="mb-2 d-none">
                            <label for="kecamatanSelect" class="form-label">Pilih Kecamatan</label>
                            <select class="form-select" id="kecamatanSelect">
                                <option selected>Lubuk Linggau Barat I</option>
                                <option>Lubuk Linggau Barat II</option>
                                <option>Lubuk Linggau Timur I</option>
                                <option>Lubuk Linggau Timur II</option>
                            </select>
                        </div>

                        <!-- Dropdown Kelurahan -->
                        <div id="dropdown-kelurahan" class="mb-2 d-none">
                            <label for="kelurahanSelect" class="form-label">Pilih Kelurahan</label>
                            <select class="form-select" id="kelurahanSelect">
                                <option selected>Kelurahan A</option>
                                <option>Kelurahan B</option>
                                <option>Kelurahan C</option>
                            </select>
                        </div>




                        <div class="d-flex flex-wrap gap-2 mb-3" id="kategori-buttons">
                            <button type="button" class="btn btn-outline-primary btn-sm active text-nowrap"
                                data-kategori="semua">
                                Semua Kategori
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm text-nowrap"
                                data-kategori="individu">
                                Deskripsi Individu
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm text-nowrap"
                                data-kategori="ekonomi">
                                Ekonomi
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm text-nowrap"
                                data-kategori="sosial">
                                Sosial & Kesehatan
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm text-nowrap"
                                data-kategori="perumahan">
                                Rumah Tangga & Perumahan
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm text-nowrap"
                                data-kategori="wilayah">
                                Potensi Kewilayahan
                            </button>
                        </div>

                        <!-- Input Pencarian (Opsional) -->
                        <input type="text" class="form-control mb-2" placeholder="Cari indikator"
                            id="searchInput">
                        <div id="indikator-wrapper">


                            <div class="indicator-list" data-kategori="individu">
                                <div class="list-group mb-2">
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="jenis-kelamin">Jenis Kelamin</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="usia">Usia</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="status-perkawinan">Status Perkawinan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="agama">Agama</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="suku-bangsa">Suku Bangsa</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kewarganegaraan">Kewarganegaraan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kartu-keluarga">Kepemilikan Kartu Keluarga</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="ktp">Kepemilikan KTP</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="buku-nikah">Kepemilikan Buku Nikah</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="buku-cerai">Kepemilikan Buku Cerai</button>


                                </div>
                            </div>

                            <div class="indicator-list" data-kategori="ekonomi">
                                <div class="list-group mb-2">
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kegiatan-utama-penduduk">Kegiatan Utama Penduduk
                                        (Kerja/Sekolah/Lainnya)</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="jenis-usaha-pekerjaan">Jenis Usaha/Pekerjaan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="bantuan-sosial-individu">Bantuan Sosial Individu</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="usaha-umkm">Usaha: UMKM</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="jaminan-sosial-ketenagakerjaan">Jaminan Sosial
                                        Ketenagakerjaan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kewajiban-pajak-lainnya">Kewajiban Pajak Lainnya</button>
                                </div>
                            </div>

                            <div class="indicator-list" data-kategori="sosial">
                                <div class="list-group mb-2">
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="partisipasi-sekolah">Partisipasi Sekolah</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="pendidikan-tertinggi">Pendidikan Tertinggi (Ijazah)</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="disabilitas">Disabilitas</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kejadian-kematian">Kejadian Kematian</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="jaminan-sosial-kesehatan">Jaminan Sosial Kesehatan</button>
                                </div>
                            </div>

                            <div class="indicator-list" data-kategori="perumahan">
                                <div class="list-group mb-2">
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="jenis-dinding-rumah">Jenis Dinding Rumah</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="status-kepemilikan-tempat-tinggal">Status Kepemilikan Tempat
                                        Tinggal</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="sumber-penerangan-rumah">Sumber Penerangan Rumah (PLN / Non
                                        PLN)</button>
                                </div>
                            </div>

                            <div class="indicator-list" data-kategori="wilayah">
                                <div class="list-group mb-2">
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="topografi-kelurahan">Topografi Kelurahan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="kependudukan-ketenagakerjaan">Kependudukan dan
                                        Ketenagakerjaan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="perumahan-lingkungan-hidup">Perumahan dan Lingkungan
                                        Hidup</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="bencana-mitigasi">Bencana Alam dan Mitigasi Bencana</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="pendidikan-kesehatan">Pendidikan dan Kesehatan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="sosial-budaya">Sosial Budaya</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="angkutan">Angkutan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="komunikasi">Komunikasi</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="informasi">Informasi</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="penggunaan-lahan">Penggunaan Lahan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="ekonomi">Ekonomi</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="keamanan">Keamanan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="keuangan-aset">Keuangan dan Aset</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="perlindungan-sosial">Perlindungan Sosial</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="pembangunan">Pembangunan</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="pemberdayaan-masyarakat">Pemberdayaan Masyarakat</button>
                                    <button class="list-group-item list-group-item-action btn-sm"
                                        data-target="aparatur-pemerintah">Aparatur Pemerintah</button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Content -->
                    <div class="col-md-9">
                        <!-- Konten Default (Kosong Awal) -->
                        <div id="konten-default" class="indikator-konten">
                            <div class="text-center py-5 instruction-box">
                                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
             10-4.48 10-10S17.52 2 12 2zm.75 15h-1.5v-6h1.5v6zm0-8h-1.5V7h1.5v2z" />
                                </svg>
                                <h5>Silakan pilih indikator yang ingin ditampilkan</h5>
                                <p class="text-muted">Klik salah satu indikator di samping untuk melihat grafik dan
                                    tabel.</p>
                            </div>
                        </div>

                        <!-- Konten Jenis Kelamin -->
                        <div id="konten-jenis-kelamin" class="indikator-konten d-none">
                            <div class="chart-container">
                                <h5>Grafik Jumlah Penduduk Menurut Kecamatan dan Jenis Kelamin di Kota Lubuk Linggau
                                </h5>
                                <div id="chart" class="card-body">
                                    <!-- Tempatkan chart di sini -->
                                </div>
                            </div>

                            <div class="chart-container">
                                <h5 class="mt-4">Jumlah Penduduk Menurut Kecamatan dan Jenis Kelamin di Kota Lubuk
                                    Linggau</h5>
                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Kota</th>
                                            <th>Laki-Laki</th>
                                            <th>Perempuan</th>
                                            <th>Rasio Jenis Kelamin</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lubuk Linggau</td>
                                            <td>34.000</td>
                                            <td>32.500</td>
                                            <td>1.05</td>
                                            <td>66.500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Konten Usia -->
                        <div id="konten-usia" class="indikator-konten d-none">
                            <div class="chart-container">
                                <h5>Grafik Jumlah Penduduk Menurut Kecamatan dan Kelompok Usia di Kota Lubuk Linggau
                                </h5>
                                <div id="piramidachart" class="card-body">
                                    <!-- Tempatkan chart usia di sini -->
                                </div>
                            </div>

                            <div class="chart-container">
                                <h5 class="mt-4">Jumlah Penduduk Menurut Kecamatan dan Kelompok Usia di Kota Lubuk
                                    Linggau</h5>

                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Kelompok Umur</th>
                                            <th>Laki-laki</th>
                                            <th>Perempuan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0 - 4</td>
                                            <td style="text-align: right;">5,816</td>
                                            <td style="text-align: right;">5,348</td>
                                            <td style="text-align: right;">11,164</td>
                                        </tr>
                                        <tr>
                                            <td>5 - 9</td>
                                            <td style="text-align: right;">8,572</td>
                                            <td style="text-align: right;">8,066</td>
                                            <td style="text-align: right;">16,638</td>
                                        </tr>
                                        <tr>
                                            <td>10 - 14</td>
                                            <td style="text-align: right;">9,910</td>
                                            <td style="text-align: right;">9,218</td>
                                            <td style="text-align: right;">19,128</td>
                                        </tr>
                                        <tr>
                                            <td>15 - 19</td>
                                            <td style="text-align: right;">9,075</td>
                                            <td style="text-align: right;">8,407</td>
                                            <td style="text-align: right;">17,482</td>
                                        </tr>
                                        <tr>
                                            <td>20 - 24</td>
                                            <td style="text-align: right;">8,078</td>
                                            <td style="text-align: right;">6,882</td>
                                            <td style="text-align: right;">14,960</td>
                                        </tr>
                                        <tr>
                                            <td>25 - 29</td>
                                            <td style="text-align: right;">6,624</td>
                                            <td style="text-align: right;">6,065</td>
                                            <td style="text-align: right;">12,689</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section><!-- /Starter Section Section -->

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
            series: [{
                    name: 'Males',
                    data: [0.4, 0.65, 0.76, 0.88, 1.5, 2.1, 2.9, 3.8, 3.9, 4.2, 4, 4.3, 4.1, 4.2, 4.5,
                        3.9, 3.5, 3
                    ]
                },
                {
                    name: 'Females',
                    data: [-0.8, -1.05, -1.06, -1.18, -1.4, -2.2, -2.85, -3.7, -3.96, -4.22, -4.3, -4.4,
                        -4.1, -4, -4.1, -3.4, -3.1, -2.8
                    ]
                }
            ],
            chart: {
                type: 'bar',
                height: 440,
                stacked: true
            },
            colors: ['#008FFB', '#FF4560'],
            plotOptions: {
                bar: {
                    borderRadius: 5,
                    borderRadiusApplication: 'end', // 'around', 'end'
                    borderRadiusWhenStacked: 'all', // 'all', 'last'
                    horizontal: true,
                    barHeight: '80%',
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 1,
                colors: ["#fff"]
            },

            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                }
            },
            yaxis: {
                stepSize: 1
            },
            tooltip: {
                shared: false,
                x: {
                    formatter: function(val) {
                        return val
                    }
                },
                y: {
                    formatter: function(val) {
                        return Math.abs(val) + "%"
                    }
                }
            },

            xaxis: {
                categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59', '50-54',
                    '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9',
                    '0-4'
                ],
                title: {
                    text: 'Percent'
                },
                labels: {
                    formatter: function(val) {
                        return Math.abs(Math.round(val)) + "%"
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#piramidachart"), options);
        chart.render();
    </script>


    <script>
        function activateIndicator(target) {
            document.querySelectorAll('.indicator-list .list-group-item').forEach(btn => {
                btn.classList.remove('active');
            });
            const activeButton = document.querySelector(`.indicator-list .list-group-item[data-target="${target}"]`);
            if (activeButton) activeButton.classList.add('active');

            document.querySelectorAll('.indikator-konten').forEach(content => {
                content.classList.add('d-none');
            });
            const selectedContent = document.getElementById(`konten-${target}`);
            if (selectedContent) selectedContent.classList.remove('d-none');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const savedIndicator = sessionStorage.getItem('activeIndicator');

            // Deteksi apakah ini reload halaman (refresh)
            const navEntries = performance.getEntriesByType("navigation");
            const isReload = navEntries.length > 0 && navEntries[0].type === 'reload';

            if (isReload && savedIndicator) {
                // Jika refresh dan ada data di sessionStorage, restore indikator terakhir
                activateIndicator(savedIndicator);
            } else {
                // Jika bukan refresh (misal pindah halaman dan kembali), reset ke default
                activateIndicator('default');
                sessionStorage.removeItem('activeIndicator');
            }

            document.querySelectorAll('.indicator-list .list-group-item').forEach(button => {
                button.addEventListener('click', () => {
                    const target = button.getAttribute('data-target');
                    activateIndicator(target);
                    sessionStorage.setItem('activeIndicator', target);
                });
            });
        });
    </script>








    <!-- Script Cari Indikator -->
    <script>
        document.querySelector('input[placeholder="Cari indikator"]').addEventListener('input', function() {
            const keyword = this.value.toLowerCase();
            const items = document.querySelectorAll('.indicator-list .list-group-item');
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(keyword)) {
                    item.classList.remove('d-none');
                } else {
                    item.classList.add('d-none');
                }
            });
        });
    </script>

    <!-- Script Dropdown Kecamatan dan Kelurahan -->
    <script>
        const buttons = document.querySelectorAll('#wilayah-buttons button');
        const kecDropdown = document.getElementById('dropdown-kecamatan');
        const kelDropdown = document.getElementById('dropdown-kelurahan');
        const kotaDropdown = document.getElementById('dropdown-kota');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const wilayah = btn.getAttribute('data-wilayah');

                kotaDropdown.classList.remove('d-none');
                kecDropdown.classList.add('d-none');
                kelDropdown.classList.add('d-none');

                if (wilayah === 'kecamatan') {
                    kecDropdown.classList.remove('d-none');
                } else if (wilayah === 'kelurahan') {
                    kecDropdown.classList.remove('d-none');
                    kelDropdown.classList.remove('d-none');
                }
            });
        });
    </script>

    <!-- Script Kategori Filter -->
    <script>
        const kategoriButtons = document.querySelectorAll('#kategori-buttons button');
        const indicatorLists = document.querySelectorAll('.indicator-list');

        function filterKategori(kategori) {
            indicatorLists.forEach(list => {
                const heading = list.querySelector('.indikator-heading');
                if (kategori === 'semua') {
                    list.classList.remove('d-none');
                    if (heading) heading.classList.add('d-none');
                } else {
                    if (list.getAttribute('data-kategori') === kategori) {
                        list.classList.remove('d-none');
                        if (heading) heading.classList.remove('d-none');
                    } else {
                        list.classList.add('d-none');
                    }
                }
            });
        }

        kategoriButtons.forEach(button => {
            button.addEventListener('click', () => {
                kategoriButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const kategori = button.getAttribute('data-kategori');
                filterKategori(kategori);

                const indikatorButtons = document.querySelectorAll('.indicator-list .list-group-item');
                indikatorButtons.forEach(b => b.classList.remove('active'));
            });
        });

        window.addEventListener('DOMContentLoaded', () => {
            filterKategori('semua');
        });
    </script>







</body>

</html>
