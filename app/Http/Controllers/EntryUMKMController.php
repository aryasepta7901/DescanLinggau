<?php

namespace App\Http\Controllers;

use App\Models\EntryUMKM;
use App\Models\KBLI;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class EntryUMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umkm.index', [
            'title' => 'Entry Data UMKM Kelurahan: ' . Auth()->user()->kelurahan->kelurahan . ' RT: ' . Auth()->user()->rt,
            'user' => Auth()->user(),
            'umkm' => EntryUMKM::where('r101', Auth()->user()->kelurahan->id)->where('r102', Auth()->user()->rt)->get(),


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi isian Blok I
        $request->validate(
            [
                'r103' => 'required|string|max:255',
                'r104' => 'required|string|max:255',
            ],
            [
                'required' => ':attribute wajib diisi.',
                'max' => ':attribute maksimal :max karakter.',
                'string' => ':attribute harus berupa teks.',
            ]
        );
        EntryUMKM::updateOrCreate(
            ['id' => Str::uuid()],
            [
                'r101' => auth()->user()->kelurahan->id,
                'r102' => auth()->user()->rt,
                'r103' => $request->r103,
                'r104' => $request->r104,
                'status' => 1,

            ]
        );



        return redirect()->back()->with('success', 'Data Blok I berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntryUMKM  $entryUMKM
     * @return \Illuminate\Http\Response
     */
    public function show(EntryUMKM $entryUMKM)
    {
        $id = last(explode('/', request()->url()));

        return view('umkm.create', [
            'title' => 'Edit Data UMKM',
            'umkm' => EntryUMKM::where('id', $id)->first(),
            'user' => Auth()->user(),
            'kbli' => KBLI::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntryUMKM  $entryUMKM
     * @return \Illuminate\Http\Response
     */
    public function edit(EntryUMKM $entryUMKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntryUMKM  $entryUMKM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntryUMKM $entryUMKM)
    {
        $id = last(explode('/', request()->url()));

        // Cek tombol mana yang ditekan
        $action = $request->input('action');

        // Jika tombol "Simpan + Validasi"
        if ($action === 'validate') {

            $request->validate([
                // Blok I
                'r103' => 'required',
                'r104' => 'required',
                // Blok II
                'r201a' => 'required|string|max:255',
                'r201b' => 'required|string|digits:16',
                'r201c' => 'required|in:1,2',
                'r201d' => 'required|integer|min:0',
                'r201e' => 'required|string|max:20',
                'r201f' => 'required|in:1,2,3,4,5,6,7,8,9',

                // Blok III
                'r301a' => 'required|string|max:500',
                'r301b' => 'required|string|max:500',
                'r301c' => 'required|string|max:255',
                'r301d' => 'required|string|max:10',
                'r302' => 'required|in:1,2,3,4,5',
                'r303' => 'required|in:1,2',
                'r304' => 'required|array',
                'r305' => Rule::requiredIf(function () use ($request) {
                    return in_array('1', (array)$request->r304);
                }),
                'r306' => 'required|array',
                'r307' => 'required|array',
                'r308' => 'required|array',

                // Pekerja
                'r309a3' => 'required|integer|min:0',
                'r309a4' => 'required|integer|min:0',
                'r309b3' => 'required|integer|min:0',
                'r309b4' => 'required|integer|min:0',
                'r310a3' => 'required|integer|min:0',
                'r310a4' => 'required|integer|min:0',
                'r310b3' => 'required|integer|min:0',
                'r310b4' => 'required|integer|min:0',
                'r310c3' => 'required|integer|min:0',
                'r310c4' => 'required|integer|min:0',
                'r310d3' => 'required|integer|min:0',
                'r310d4' => 'required|integer|min:0',
                'r310e3' => 'required|integer|min:0',
                'r310e4' => 'required|integer|min:0',
                'r311a3' => 'required|integer|min:0',
                'r311a4' => 'required|integer|min:0',
                'r311b3' => 'required|integer|min:0',
                'r311b4' => 'required|integer|min:0',
                'r311c3' => 'required|integer|min:0',
                'r311c4' => 'required|integer|min:0',
                'r311d3' => 'required|integer|min:0',
                'r311d4' => 'required|integer|min:0',



                // Modal
                'r312a' => 'required|integer|min:0|max:100',
                'r312b' => 'required|integer|min:0|max:100',
            ],  [
                'required' => ':attribute wajib diisi.',
                'max' => ':attribute maksimal :max Karakter.',
                'min' => ':attribute minimal :min Karakter.',
                'digits' => 'NIK Harus :digits Karakter.'

            ]);
            // Validasi tambahan: total harus 100
            $totalModal = (int)$request->r312a + (int)$request->r312b;
            if ($totalModal !== 100) {
                return redirect()->back()
                    ->withErrors(['r312a' => 'Total persentase modal usaha harus sama dengan 100%.'])
                    ->withInput();
            }
            // Validasi total pekerja laki-laki
            $totalLaki309 = (int)$request->r309a3 + (int)$request->r309b3;
            $totalLaki310 = (int)$request->r310a3 + (int)$request->r310b3 + (int)$request->r310c3 + (int)$request->r310d3 + (int)$request->r310e3;
            $totalLaki311 = (int)$request->r311a3 + (int)$request->r311b3 + (int)$request->r311c3 + (int)$request->r311d3;

            // Validasi total pekerja perempuan
            $totalPerempuan309 = (int)$request->r309a4 + (int)$request->r309b4;
            $totalPerempuan310 = (int)$request->r310a4 + (int)$request->r310b4 + (int)$request->r310c4 + (int)$request->r310d4 + (int)$request->r310e4;
            $totalPerempuan311 = (int)$request->r311a4 + (int)$request->r311b4 + (int)$request->r311c4 + (int)$request->r311d4;

            $errors = [];

            // Cek konsistensi laki-laki
            if (!($totalLaki309 === $totalLaki310 && $totalLaki309 === $totalLaki311)) {
                $errors['r309a3'] = 'Jumlah pekerja laki-laki pada tabel 309, 310, dan 311 harus sama.';
            }

            // Cek konsistensi perempuan
            if (!($totalPerempuan309 === $totalPerempuan310 && $totalPerempuan309 === $totalPerempuan311)) {
                $errors['r309a4'] = 'Jumlah pekerja perempuan pada tabel 309, 310, dan 311 harus sama.';
            }

            if (count($errors) > 0) {
                return redirect()->back()
                    ->withErrors($errors)
                    ->withInput();
            }

            EntryUMKM::updateOrCreate(
                ['id' => $id],
                ['status' => 2],
            ); // kondisi pencarian berdasarkan ID
            return redirect('/EntryUMKM')->with('success', 'Data Clean/Bersih');
        }

        if ($action === 'save') {
            EntryUMKM::updateOrCreate(
                ['id' => $id], // kondisi pencarian berdasarkan ID
                [
                    // Blok II
                    'r201a' => $request->r201a,
                    'r201b' => $request->r201b,
                    'r201c' => $request->r201c,
                    'r201d' => $request->r201d,
                    'r201e' => $request->r201e,
                    'r201f' => $request->r201f,

                    // Blok III
                    'r301a' => $request->r301a,
                    'r301b' => $request->r301b,
                    'r301c' => $request->r301c,
                    'r301d' => $request->r301d,
                    'r302'  => $request->r302,
                    'r303'  => $request->r303,

                    'r304' => $request->r304 ? implode(',', $request->r304) : null,
                    'r305' => $request->r305 ? implode(',', $request->r305) : null,
                    'r306' => $request->r306 ? implode(',', $request->r306) : null,
                    'r307' => $request->r307 ? implode(',', $request->r307) : null,
                    'r308' => $request->r308 ? implode(',', $request->r308) : null,

                    // Pekerja
                    'r309a3' => $request->r309a3,
                    'r309a4' => $request->r309a4,
                    'r309b3' => $request->r309b3,
                    'r309b4' => $request->r309b4,

                    // Pendidikan (310)
                    'r310a3' => $request->r310a3,
                    'r310a4' => $request->r310a4,
                    'r310b3' => $request->r310b3,
                    'r310b4' => $request->r310b4,
                    'r310c3' => $request->r310c3,
                    'r310c4' => $request->r310c4,
                    'r310d3' => $request->r310d3,
                    'r310d4' => $request->r310d4,
                    'r310e3' => $request->r310e3,
                    'r310e4' => $request->r310e4,

                    // Usia (311)
                    'r311a3' => $request->r311a3,
                    'r311a4' => $request->r311a4,
                    'r311b3' => $request->r311b3,
                    'r311b4' => $request->r311b4,
                    'r311c3' => $request->r311c3,
                    'r311c4' => $request->r311c4,
                    'r311d3' => $request->r311d3,
                    'r311d4' => $request->r311d4,

                    // Modal (312)
                    'r312a' => $request->r312a,
                    'r312b' => $request->r312b,
                ]
            );
            return redirect()->back()->with('success', 'Data Berhasil di Simpan');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntryUMKM  $entryUMKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, EntryUMKM $entryUMKM)
    {
        $data = EntryUMKM::findOrFail($request->id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
