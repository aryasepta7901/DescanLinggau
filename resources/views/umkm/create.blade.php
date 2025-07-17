@extends('layouts.backEnd.main')
<style>
    .card-block {
        display: none;
    }

    /* fix footer */
    .footer-fixed {
        position: fixed;
        bottom: 0;
        left: 250px;
        /* Sidebar default width */
        width: calc(100% - 250px);
        z-index: 1030;
        /* Di atas konten */
    }

    /* Jika sidebar collapse (80px) */
    body.sidebar-collapse .footer-fixed {
        left: 80px;
        width: calc(100% - 80px);
    }

    /* Jika sidebar hilang total */
    body.sidebar-collapse.sidebar-closed .footer-fixed {
        left: 0;
        width: 100%;
    }
</style>

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/EntryUMKM/' . $umkm->id) }}" method="post">
                    @method('put')
                    @csrf
                    <!-- Blok I -->
                    <div id="blok1" class="card card-primary card-block">
                        <div class="card-header">
                            <h3 class="card-title">Blok I. Pengenalan Tempat Usaha</h3>
                        </div>
                        <div class="card-body">
                            <!-- 101. Kelurahan -->
                            <div class="form-group">
                                <label>101. Kelurahan</label>
                                <input type="text" name="r101" class="form-control"
                                    value="{{ $user->kelurahan->kelurahan }}" disabled>
                            </div>

                            <!-- 102. RT -->
                            <div class="form-group">
                                <label>102. Wilayah Rukun Tetangga</label>
                                <input type="text" class="form-control" name="r102" value="{{ $user->rt }}"
                                    disabled>
                            </div>

                            <!-- 103. Nama Usaha -->
                            <div class="form-group">
                                <label>103. Nama Usaha</label>
                                <input type="text" class="form-control @error('r103') is-invalid @enderror"
                                    name="r103" placeholder="Contoh: KUSEN<JOKO>, OJEK<SUPAR>, WARUNG SEMBAKO<NELI>"
                                    value="{{ old('r103', $umkm->r103 ?? '') }}">
                                @error('r103')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 104. Alamat Tempat Usaha -->
                            <div class="form-group">
                                <label>104. Alamat Tempat Usaha</label>
                                <input type="text" class="form-control @error('r104') is-invalid @enderror"
                                    name="r104" placeholder="Alamat lengkap tempat usaha"
                                    value="{{ old('r104', $umkm->r104 ?? '') }}">
                                @error('r104')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Blok II -->
                    <div id="blok2" class="card card-info card-block">
                        <div class="card-header">
                            <h3 class="card-title">Blok II. Karakteristik Pengusaha</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- 201.a Nama Pengusaha -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>201.a Nama Pengusaha</label>
                                        <input type="text" name="r201a"
                                            class="form-control @error('r201a') is-invalid @enderror"
                                            placeholder="Nama Pengusaha" value="{{ old('r201a', $umkm->r201a ?? '') }}">
                                        @error('r201a')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- 201.b NIK -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>201.b NIK</label>
                                        <input type="text" name="r201b"
                                            class="form-control @error('r201b') is-invalid @enderror"
                                            placeholder="Nomor Induk Kependudukan"
                                            value="{{ old('r201b', $umkm->r201b ?? '') }}">
                                        @error('r201b')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">
                                            NB: Jika Tidak Ada NIK, Beri Strip (-)
                                        </small>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <!-- 201.c Jenis Kelamin -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>201.c Jenis Kelamin</label>
                                        <select class="form-control select2bs4 @error('r201c') is-invalid @enderror"
                                            name="r201c">
                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="1"
                                                {{ old('r201c', $umkm->r201c ?? '') == '1' ? 'selected' : '' }}>
                                                1. Laki-laki
                                            </option>
                                            <option value="2"
                                                {{ old('r201c', $umkm->r201c ?? '') == '2' ? 'selected' : '' }}>
                                                2. Perempuan
                                            </option>
                                        </select>
                                        @error('r201c')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- 201.d Umur -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>201.d Umur</label>
                                        <input type="number" name="r201d"
                                            class="form-control @error('r201d') is-invalid @enderror"
                                            placeholder="Umur dalam tahun" value="{{ old('r201d', $umkm->r201d ?? '') }}">
                                        @error('r201d')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">
                                            NB: Umur dibulatkan ke bawah dalam tahun
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- 201.e Nomor HP -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>201.e Nomor Handphone</label>
                                        <input type="text" name="r201e"
                                            class="form-control @error('r201e') is-invalid @enderror"
                                            placeholder="Contoh: 081234567890"
                                            value="{{ old('r201e', $umkm->r201e ?? '') }}">
                                        @error('r201e')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- 201.f Tingkat Pendidikan -->
                                <div class="col-lg-6 mb-5">
                                    <div class="form-group">
                                        <label>201.f Tingkat Pendidikan Tertinggi yang Ditamatkan</label>
                                        <select class="form-control select2bs4 @error('r201f') is-invalid @enderror"
                                            name="r201f">
                                            <option value="">-- Pilih Tingkat Pendidikan --</option>
                                            @foreach ([1 => 'Tidak Tamat SD', 2 => 'SD dan Sederajat', 3 => 'SMP dan Sederajat', 4 => 'SMA/Madrasah Aliyah/Paket C', 5 => 'Sekolah Menengah Kejuruan', 6 => 'Diploma I/II/III', 7 => 'Diploma IV/S1', 8 => 'S2', 9 => 'S3'] as $key => $label)
                                                <option value="{{ $key }}"
                                                    {{ old('r201f', $umkm->r201f ?? '') == $key ? 'selected' : '' }}>
                                                    {{ $key }}. {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('r201f')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="blok3" class="card card-warning card-block">
                        <div class="card-header">
                            <h3 class="card-title">Blok III. Karakteristik Usaha/Perusahaan</h3>
                        </div>
                        <div class="card-body">
                            <!-- 301.a Kegiatan Usaha -->
                            <div class="form-group">
                                <label>301.a Tuliskan secara lengkap kegiatan usaha yang dilakukan</label>
                                <textarea class="form-control @error('r301a') is-invalid @enderror" rows="3" name="r301a"
                                    placeholder="Deskripsi kegiatan usaha">{{ old('r301a', $umkm->r301a ?? '') }}</textarea>
                                @error('r301a')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 301.b Produk Utama -->
                            <div class="form-group">
                                <label>301.b Tuliskan produk utama (barang atau jasa) yang dihasilkan/dijual</label>
                                <textarea class="form-control @error('r301b') is-invalid @enderror" rows="2" name="r301b"
                                    placeholder="Contoh: Kusen kayu, Jasa Ojek">{{ old('r301b', $umkm->r301b ?? '') }}</textarea>
                                @error('r301b')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- 301.c Kategori Lapangan Usaha -->
                                    <div class="form-group">
                                        <label>301.c Kategori Lapangan Usaha (diisi pemeriksa):</label>
                                        <input type="text" id="kategoriInput" name="r301c"
                                            class="form-control @error('r301c') is-invalid @enderror"
                                            placeholder="Lapangan Usaha" value="{{ old('r301c', $umkm->r301c ?? '') }}"
                                            readonly>
                                        @error('r301c')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- 301.d Kode KBLI -->
                                    <div class="form-group">
                                        <label>301.d Kode KBLI (Diisi pemeriksa)</label>

                                        @php
                                            // Ambil value yang valid (null jika kosong)
                                            $selectedKbliId = old('r301d', $umkm->r301d ?? null);
                                        @endphp

                                        <select id="kbliSelect" name="r301d"
                                            class="form-control select2bs4 @error('r301d') is-invalid @enderror">
                                            <option value="">-- Pilih KBLI --</option>
                                            @foreach ($kbli as $value)
                                                <option value="{{ $value->id }}"
                                                    data-kategori="{{ $value->kategori }}"
                                                    @if ($selectedKbliId !== null && $selectedKbliId == $value->id) selected @endif>
                                                    {{ $value->id }} : {{ $value->kbli }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('r301d')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <!-- 302. Bentuk Badan Usaha -->
                            <div class="form-group">
                                <label>302. Bentuk Badan Usaha/Badan Hukum</label>
                                <select class="form-control select2bs4 @error('r302') is-invalid @enderror"
                                    name="r302">
                                    <option value="">-- Pilih Bentuk Usaha --</option>
                                    @foreach ([1 => 'PT', 2 => 'CV', 3 => 'Yayasan', 4 => 'Koperasi', 5 => 'Perseorangan/Tidak Berbadan Hukum atau Usaha'] as $key => $label)
                                        <option value="{{ $key }}"
                                            {{ old('r302', $umkm->r302 ?? '') == $key ? 'selected' : '' }}>
                                            {{ $key }}. {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('r302')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 303. NIB -->
                            <div class="form-group mt-3">
                                <label>303. Apakah usaha memiliki Nomor Induk Berusaha (NIB)?</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input @error('r303') is-invalid @enderror"
                                        type="radio" id="nibYa" name="r303" value="1"
                                        {{ old('r303', $umkm->r303 ?? '') == '1' ? 'checked' : '' }}>
                                    <label for="nibYa" class="custom-control-label">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input @error('r303') is-invalid @enderror"
                                        type="radio" id="nibTidak" name="r303" value="2"
                                        {{ old('r303', $umkm->r303 ?? '') == '2' ? 'checked' : '' }}>
                                    <label for="nibTidak" class="custom-control-label">Tidak</label>
                                </div>
                                @error('r303')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 304. Penggunaan Internet -->
                            <div class="form-group mt-3">
                                <label>304. Penggunaan Internet oleh perusahaan (Bisa Pilih Lebih dari 1)</label>
                                @foreach ([['1', 'Pemasaran produk'], ['2', 'Pemesanan bahan baku'], ['3', 'Pembayaran transaksi'], ['4', 'Pinjaman'], ['5', 'Pencarian informasi terkait pengembangan usaha']] as [$val, $label])
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input @error('r304') is-invalid @enderror"
                                            type="checkbox" id="internet{{ $val }}" name="r304[]"
                                            value="{{ $val }}"
                                            {{ collect(old('r304', $umkm->r304 ? explode(',', $umkm->r304) : []))->contains($val) ? 'checked' : '' }}>
                                        <label for="internet{{ $val }}"
                                            class="custom-control-label">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @error('r304')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 305. Media Penjualan -->
                            <div id="mediaPenjualanSection" class="form-group mt-3" style="display:none;">
                                <label>305. Jika R.304.a terisi Ya, media yang digunakan untuk penjualan barang/jasa</label>
                                @foreach ([['1', 'Website'], ['2', 'Email Marketing'], ['3', 'Pesan Instan (WhatsApp, Telegram, dll)'], ['4', 'Media Sosial (Instagram, TikTok, Facebook, dll)'], ['5', 'Marketplace/platform digital (Gojek, Tokopedia, dll)']] as [$val, $label])
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input @error('r305') is-invalid @enderror"
                                            type="checkbox" id="media{{ $val }}" name="r305[]"
                                            value="{{ $val }}"
                                            {{ collect(old('r305', $umkm->r305 ? explode(',', $umkm->r305) : []))->contains($val) ? 'checked' : '' }}>
                                        <label for="media{{ $val }}"
                                            class="custom-control-label">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @error('r305')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 306. Kendala -->
                            <div class="form-group mt-3">
                                <label>306. Kendala/kesulitan yang dialami oleh usaha/perusahaan</label>
                                @foreach ([['1', 'Bahan baku'], ['2', 'Permodalan'], ['3', 'Pemasaran/penjualan produk'], ['4', 'BBM, listrik, dan gas'], ['5', 'Infrastruktur (jalan, air, komunikasi, dan lainnya)'], ['6', 'Tenaga kerja']] as [$val, $label])
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input @error('r306') is-invalid @enderror"
                                            type="checkbox" id="kendala{{ $val }}" name="r306[]"
                                            value="{{ $val }}"
                                            {{ collect(old('r306', $umkm->r306 ? explode(',', $umkm->r306) : []))->contains($val) ? 'checked' : '' }}>
                                        <label for="kendala{{ $val }}"
                                            class="custom-control-label">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @error('r306')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 307. Bantuan -->
                            <div class="form-group mt-3">
                                <label>307. Badan/lembaga yang pernah memberi pelayanan/bantuan</label>
                                @foreach ([['1', 'Instansi Pemerintah'], ['2', 'Perusahaan Swasta'], ['3', 'Perbankan'], ['4', 'Yayasan/LSM'], ['5', 'Koperasi']] as [$val, $label])
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input @error('r307') is-invalid @enderror"
                                            type="checkbox" id="bantuan{{ $val }}" name="r307[]"
                                            value="{{ $val }}"
                                            {{ collect(old('r307', $umkm->r307 ? explode(',', $umkm->r307) : []))->contains($val) ? 'checked' : '' }}>
                                        <label for="bantuan{{ $val }}"
                                            class="custom-control-label">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @error('r307')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 308. Teknologi -->
                            <div class="form-group mt-3">
                                <label>308. Teknologi proses kegiatan usaha/perusahaan</label>
                                @foreach ([['1', 'Manual'], ['2', 'Mekanik'], ['3', 'Elektronik'], ['4', 'Digital']] as [$val, $label])
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input @error('r308') is-invalid @enderror"
                                            type="checkbox" id="teknologi{{ $val }}" name="r308[]"
                                            value="{{ $val }}"
                                            {{ collect(old('r308', $umkm->r308 ? explode(',', $umkm->r308) : []))->contains($val) ? 'checked' : '' }}>
                                        <label for="teknologi{{ $val }}"
                                            class="custom-control-label">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @error('r308')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 309. Rata-rata banyaknya pekerja dalam setahun terakhir -->
                            <div class="form-group mt-4">
                                <label><strong>309. Rata-rata banyaknya pekerja dalam setahun terakhir:</strong></label>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center align-middle">
                                        <thead class="thead-light">
                                            <tr>
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Jenis Pekerja</th>
                                                <th colspan="2">Jenis Kelamin</th>
                                            </tr>
                                            <tr>
                                                <th style="min-width: 100px;">Laki-laki</th>
                                                <th style="min-width: 100px;">Perempuan</th>
                                            </tr>
                                            <tr>
                                                <th>(1)</th>
                                                <th>(2)</th>
                                                <th>(3)</th>
                                                <th>(4)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>a.</td>
                                                <td class="text-start">Pekerja Dibayar</td>
                                                <td><input type="number"
                                                        class="form-control @error('r309a3') is-invalid @enderror"
                                                        id="dibayarLaki" name="r309a3"
                                                        value="{{ old('r309a3', $umkm->r309a3 ?? '0') }}"
                                                        oninput="hitungJumlah()">
                                                    @error('r309a3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                                <td><input type="number"
                                                        class="form-control @error('r309a4') is-invalid @enderror"
                                                        id="dibayarPerempuan" name="r309a4"
                                                        value="{{ old('r309a4', $umkm->r309a4 ?? '0') }}"
                                                        oninput="hitungJumlah()">
                                                    @error('r309a4')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>b.</td>
                                                <td class="text-start">Pekerja Tidak Dibayar</td>
                                                <td><input type="number"
                                                        class="form-control @error('r309b3') is-invalid @enderror"
                                                        id="tdkDibayarLaki" name="r309b3"
                                                        value="{{ old('r309b3', $umkm->r309b3 ?? '0') }}"
                                                        oninput="hitungJumlah()">
                                                    @error('r309b3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                                <td><input type="number"
                                                        class="form-control @error('r309b4') is-invalid @enderror"
                                                        id="tdkDibayarPerempuan" name="r309b4"
                                                        value="{{ old('r309b4', $umkm->r309b4 ?? '0') }}"
                                                        oninput="hitungJumlah()">
                                                    @error('r309b4')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-start"><strong>Jumlah Pekerja (a+b)</strong></td>
                                                <td><input type="number" class="form-control" id="jumlahLaki" readonly>
                                                </td>
                                                <td><input type="number" class="form-control" id="jumlahPerempuan"
                                                        readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 310. Rata-rata pekerja berdasarkan tingkat pendidikan -->
                            <div class="form-group mt-4">
                                <label><strong>310. Rata-rata banyaknya pekerja berdasarkan tingkat pendidikan dalam setahun
                                        terakhir:</strong></label>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center align-middle">
                                        <thead class="thead-light">
                                            <tr>
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Tingkat Pendidikan</th>
                                                <th colspan="2">Jenis Kelamin</th>
                                            </tr>
                                            <tr>
                                                <th style="min-width: 100px;">Laki-laki</th>
                                                <th style="min-width: 100px;">Perempuan</th>

                                            </tr>
                                            <tr>
                                                <th>(1)</th>
                                                <th>(2)</th>
                                                <th>(3)</th>
                                                <th>(4)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (['a' => '< SD', 'b' => 'SD Sederajat', 'c' => 'SMP Sederajat', 'd' => 'SMA Sederajat', 'e' => 'Diploma/Strata'] as $key => $label)
                                                <tr>
                                                    <td>{{ $key }}.</td>
                                                    <td class="text-start">{!! $label !!}</td>
                                                    <td>
                                                        <input type="number"
                                                            class="form-control @error('r310' . $key . '3') is-invalid @enderror"
                                                            name="r310{{ $key }}3"
                                                            value="{{ old('r310' . $key . '3', $umkm->{'r310' . $key . '3'} ?? '0') }}">
                                                        @error('r310' . $key . '3')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                    <td>
                                                        <input type="number"
                                                            class="form-control @error('r310' . $key . '4') is-invalid @enderror"
                                                            name="r310{{ $key }}4"
                                                            value="{{ old('r310' . $key . '4', $umkm->{'r310' . $key . '4'} ?? '0') }}">
                                                        @error('r310' . $key . '4')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 311. Rata-rata pekerja berdasarkan usia -->
                            <div class="form-group mt-4">
                                <label><strong>311. Rata-rata banyaknya pekerja berdasarkan usia pekerja dalam setahun
                                        terakhir:</strong></label>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center align-middle">
                                        <thead class="thead-light">
                                            <tr>
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Kelompok Usia</th>
                                                <th colspan="2">Jenis Kelamin</th>
                                            </tr>
                                            <tr>
                                                <th style="min-width: 100px;">Laki-laki</th>
                                                <th style="min-width: 100px;">Perempuan</th>
                                            </tr>
                                            <tr>
                                                <th>(1)</th>
                                                <th>(2)</th>
                                                <th>(3)</th>
                                                <th>(4)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (['a' => '< 15 tahun', 'b' => '15–24 tahun', 'c' => '25–64 tahun', 'd' => '> 64 tahun'] as $key => $label)
                                                <tr>
                                                    <td>{{ $key }}.</td>
                                                    <td class="text-start">{{ $label }}</td>
                                                    <td>
                                                        <input type="number"
                                                            class="form-control @error('r311' . $key . '3') is-invalid @enderror"
                                                            name="r311{{ $key }}3"
                                                            value="{{ old('r311' . $key . '3', $umkm->{'r311' . $key . '3'} ?? '0') }}">
                                                        @error('r311' . $key . '3')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                    <td>
                                                        <input type="number"
                                                            class="form-control @error('r311' . $key . '4') is-invalid @enderror"
                                                            name="r311{{ $key }}4"
                                                            value="{{ old('r311' . $key . '4', $umkm->{'r311' . $key . '4'} ?? '0') }}">
                                                        @error('r311' . $key . '4')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 312. Sumber Modal Usaha -->
                            <div class="form-group mt-4">
                                <label><strong>312. Sumber Modal Usaha:</strong></label>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center align-middle">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width:5%;">No.</th>
                                                <th class="text-start">Sumber Modal</th>
                                                <th style="width:30%;">%</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>a.</td>
                                                <td class="text-start">
                                                    Milik sendiri
                                                    <em>(termasuk warisan dan pemberian dari pihak lain ataupun usaha
                                                        patungan)</em>
                                                </td>
                                                <td>
                                                    <input type="number" min="0" max="100"
                                                        class="form-control @error('r312a') is-invalid @enderror"
                                                        name="r312a" id="modalMilik"
                                                        value="{{ old('r312a', $umkm->r312a ?? '') }}"
                                                        oninput="cekTotalModal()">
                                                    @error('r312a')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>b.</td>
                                                <td class="text-start">Pinjaman dari pihak lain</td>
                                                <td>
                                                    <input type="number" min="0" max="100"
                                                        class="form-control @error('r312b') is-invalid @enderror"
                                                        name="r312b" id="modalPinjaman"
                                                        value="{{ old('r312b', $umkm->r312b ?? '') }}"
                                                        oninput="cekTotalModal()">
                                                    @error('r312b')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-end">TOTAL</th>
                                                <th><input type="number" class="form-control" id="modalTotal" readonly>
                                                </th>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <small class="form-text text-muted">Catatan: Total harus 100%</small>
                            </div>

                        </div>
                    </div>





                    <div class="footer-fixed bg-light border-top py-2">
                        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-2 mb-md-0">
                                <button type="button" class="btn btn-warning mr-2"
                                    onclick="location.href='{{ url('/EntryUMKM') }}'">
                                    <i class="fas fa-back"></i> Kembali
                                </button>
                                <button type="button" class="btn btn-secondary mr-2" onclick="showBlock('1-2')">
                                    <i class="fas fa-folder"></i> Blok I & II
                                </button>
                                <button type="button" class="btn btn-secondary mr-2" onclick="showBlock(3)">
                                    <i class="fas fa-building"></i> Blok III
                                </button>
                            </div>
                            <div>

                                @if ($umkm->status != 2)
                                    <button type="submit" name="action" value="save" class="btn btn-primary mr-2">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                @endif
                                <button type="submit" name="action" value="validate" class="btn btn-success">
                                    <i class="fas fa-check"></i> Simpan + Validasi
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script script src="{{ asset('template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script>
        var Toast = Swal.mixin({
            // toast: true,
            // position: 'top-end',
            // showConfirmButton: false,
            timer: 10000, // waktu dalam milidetik
            timerProgressBar: true,
        });
    </script>

    @if (Session::has('success'))
        <script>
            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('success') }}"
            })
        </script>
    @endif
    <script script src="{{ asset('template/backend') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script>
        var Toast = Swal.mixin({
            // toast: true,
            // position: 'top-end',
            // showConfirmButton: false,
            timer: 10000, // waktu dalam milidetik
            timerProgressBar: true,
        });
    </script>

    @if (Session::has('success'))
        <script>
            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('success') }}"
            })
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Terdapat Kesalahan Silahkan Cek di Blok 1,2, dan 3:',
            });
        </script>
    @endif
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('sidebar-collapse');
    });
</script>
{{-- Jumlah Pekerja --}}
<script>
    function hitungJumlah() {
        const dibayarLaki = parseInt(document.getElementById('dibayarLaki').value) || 0;
        const dibayarPerempuan = parseInt(document.getElementById('dibayarPerempuan').value) || 0;
        const tdkDibayarLaki = parseInt(document.getElementById('tdkDibayarLaki').value) || 0;
        const tdkDibayarPerempuan = parseInt(document.getElementById('tdkDibayarPerempuan').value) || 0;

        document.getElementById('jumlahLaki').value = dibayarLaki + tdkDibayarLaki;
        document.getElementById('jumlahPerempuan').value = dibayarPerempuan + tdkDibayarPerempuan;

    }
    // Saat halaman sudah dimuat, jalankan perhitungan awal
    document.addEventListener('DOMContentLoaded', function() {
        hitungJumlah();
    });
</script>
{{-- Jumlah Total Modal --}}
<script>
    function cekTotalModal() {
        const milik = parseFloat(document.getElementById('modalMilik').value) || 0;
        const pinjaman = parseFloat(document.getElementById('modalPinjaman').value) || 0;
        const total = milik + pinjaman;
        document.getElementById('modalTotal').value = total;
    }
    // Saat halaman sudah dimuat, jalankan perhitungan awal
    document.addEventListener('DOMContentLoaded', function() {
        cekTotalModal();
    });
</script>
