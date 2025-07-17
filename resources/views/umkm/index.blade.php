@extends('layouts.backEnd.main')

@section('content')
    <div class="col-lg-12">

        <div class="card">
            {{-- <div class="card-header d-flex justify-content-between">

            </div> --}}
            <div class="card-header">
                <button type="button" class="btn btn-primary ml-2 float-right" data-toggle="modal" data-target="#modalBlok1">
                    <i class="fa fa-plus"></i> Tambah Data Blok I
                </button>
            </div>
            <div class="card-body">

                <table id="example1" class="table table-responsive-lg table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Usaha</th>
                            <th>Alamat Tempat Usaha</th>
                            <th>Nama Pengusaha</th>
                            <th>KBLI</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse($umkm as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->r103 ?? '-' }}</td>
                                <td>{{ $item->r104 ?? '-' }}</td>
                                <td>{{ $item->r201a ?? '-' }}</td>
                                <td>{{ $item->r301d ?? '-' }}</td>
                                <td>
                                    @if ($item->status == 2)
                                        <span class="badge badge-success">Clean</span>
                                    @else
                                        <span class="badge badge-secondary">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/EntryUMKM/' . $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <!-- Tombol Hapus -->
                                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#modalHapus{{ $item->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
    <div class="modal fade" id="modalBlok1" tabindex="-1" role="dialog" aria-labelledby="modalBlok1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ route('EntryUMKM.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="modalBlok1Label">Form Blok I - Pengenalan Tempat Usaha</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- ISI BLOK I -->
                        <div class="form-group">
                            <label>101. Kelurahan</label>
                            <input type="text" name="r101" class="form-control"
                                value="{{ $user->kelurahan->kelurahan }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>102. Wilayah Rukun Tetangga</label>
                            <input type="text" class="form-control" name="r102" value="{{ $user->rt }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>103. Nama Usaha</label>
                            <input type="text" class="form-control" name="r103"
                                placeholder="Contoh: KUSEN<JOKO>, OJEK<SUPAR>, WARUNG SEMBAKO<NELI>">
                            <small class="form-text text-muted">NB: Tulis jenis usaha dan nama dalam tanda &lt;&gt;</small>
                        </div>
                        <div class="form-group">
                            <label>104. Alamat Tempat Usaha</label>
                            <input type="text" class="form-control" name="r104"
                                placeholder="Alamat lengkap tempat usaha">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Blok I</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @foreach ($umkm as $item)
        <!-- Modal Konfirmasi Hapus -->
        <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="hapusLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="hapusLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data <strong>{{ $item->r103 }}</strong>?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('/EntryUMKM/' . $item->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach




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
                title: 'Terjadi Kesalahan:',
                html: `{!! implode('<br>', $errors->all()) !!}`
            });
        </script>
    @endif
@endsection
