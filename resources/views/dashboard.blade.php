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
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Dashboard Data Kelurahan</h1>
                            <p class="mb-0">Pada halaman ini akan menampilkan data statistik kelurahan dengan isian
                                table dan grafik yang menarik</p>
                        </div>
                    </div>
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


                        <h6>Indikator</h6>
                        <input type="text" class="form-control mb-2" placeholder="Cari indikator">
                        <div class="indicator-list">
                            <div class="list-group">
                                <button class="list-group-item list-group-item-action active"
                                    data-target="jenis-kelamin">Jenis Kelamin</button>
                                <button class="list-group-item list-group-item-action" data-target="usia">Usia</button>
                                <button class="list-group-item list-group-item-action">Hubungan dengan Kepala
                                    Keluarga</button>
                                <button class="list-group-item list-group-item-action">Status Perkawinan</button>
                                <button class="list-group-item list-group-item-action">Agama</button>
                                <button class="list-group-item list-group-item-action">Suku Bangsa</button>
                                <button class="list-group-item list-group-item-action">Kewarganegaraan</button>
                                <button class="list-group-item list-group-item-action">Golongan Darah</button>
                                <button class="list-group-item list-group-item-action">Kepemilikan Buku Nikah</button>
                                <button class="list-group-item list-group-item-action">Status Kepemilikan
                                    Rumah</button>
                                <button class="list-group-item list-group-item-action">Jenis Pekerjaan</button>
                                <button class="list-group-item list-group-item-action">Pendidikan Tertinggi</button>
                                <button class="list-group-item list-group-item-action">Akses Kesehatan</button>
                                <button class="list-group-item list-group-item-action">Kepemilikan Jaminan
                                    Sosial</button>
                                <button class="list-group-item list-group-item-action">Partisipasi Kegiatan
                                    Sosial</button>
                                <button class="list-group-item list-group-item-action">Akses Internet</button>
                                <button class="list-group-item list-group-item-action">Fasilitas Air Bersih</button>
                                <button class="list-group-item list-group-item-action">Jenis Atap Rumah</button>
                                <button class="list-group-item list-group-item-action">Jenis Lantai Rumah</button>
                                <button class="list-group-item list-group-item-action">Jenis Dinding Rumah</button>
                            </div>
                        </div>

                    </div>

                    <!-- Content -->
                    <div class="col-md-9">

                        <!-- Konten Jenis Kelamin -->
                        <div id="konten-jenis-kelamin" class="indikator-konten">
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


    {{-- script perpindahan data --}}
    <script>
        // Fungsi untuk aktifkan tombol dan konten berdasarkan target
        function activateIndicator(target) {
            // Aktifkan tombol
            document.querySelectorAll('.indicator-list .list-group-item').forEach(btn => {
                btn.classList.remove('active');
            });
            const activeButton = document.querySelector(`.indicator-list .list-group-item[data-target="${target}"]`);
            if (activeButton) activeButton.classList.add('active');

            // Tampilkan konten sesuai indikator, sembunyikan sisanya
            document.querySelectorAll('.indikator-konten').forEach(content => {
                content.classList.add('d-none');
            });
            const selectedContent = document.getElementById(`konten-${target}`);
            if (selectedContent) selectedContent.classList.remove('d-none');
        }

        document.querySelectorAll('.indicator-list .list-group-item').forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');

                // Aktifkan sesuai klik
                activateIndicator(target);

                // Simpan ke localStorage supaya tersimpan walau refresh
                localStorage.setItem('activeIndicator', target);
            });
        });

        // Saat halaman dimuat, baca localStorage dan aktifkan sesuai
        document.addEventListener('DOMContentLoaded', () => {
            const savedIndicator = localStorage.getItem('activeIndicator');

            if (savedIndicator) {
                activateIndicator(savedIndicator);
            } else {
                // Jika tidak ada data tersimpan, aktifkan default (misal yang pertama)
                const firstButton = document.querySelector('.indicator-list .list-group-item');
                if (firstButton) {
                    activateIndicator(firstButton.getAttribute('data-target'));
                }
            }
        });
    </script>

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
    <script>
        const buttons = document.querySelectorAll('#wilayah-buttons button');
        const kecDropdown = document.getElementById('dropdown-kecamatan');
        const kelDropdown = document.getElementById('dropdown-kelurahan');
        const kotaDropdown = document.getElementById('dropdown-kota');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Atur ulang tombol aktif
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Ambil nilai wilayah
                const wilayah = btn.getAttribute('data-wilayah');

                // Kota selalu tampil
                kotaDropdown.classList.remove('d-none');

                // Reset sembunyikan dropdown lain
                kecDropdown.classList.add('d-none');
                kelDropdown.classList.add('d-none');

                // Tampilkan dropdown sesuai tombol
                if (wilayah === 'kecamatan') {
                    kecDropdown.classList.remove('d-none');
                } else if (wilayah === 'kelurahan') {
                    kecDropdown.classList.remove('d-none');
                    kelDropdown.classList.remove('d-none');
                }
            });
        });
    </script>





</body>

</html>
