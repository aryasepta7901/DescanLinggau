<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kecamatan;
use App\Models\kelurahan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::insert(
            [
                [
                    'id' => '1674011',
                    'kecamatan' => 'Lubuk Linggau Barat I',
                ],
                [
                    'id' => '1674',
                    'kecamatan' => 'BPS Kota Lubuk Linggau',
                ],
                [
                    'id' => '1674012',
                    'kecamatan' => 'Lubuk Linggau Barat II',
                ],
                [
                    'id' => '1674021',
                    'kecamatan' => 'Lubuk Linggau Selatan I',
                ],
                [
                    'id' => '1674022',
                    'kecamatan' => 'Lubuk Linggau Selatan II',
                ],
                [
                    'id' => '1674031',
                    'kecamatan' => 'Lubuk Linggau Timur I',
                ],
                [
                    'id' => '1674032',
                    'kecamatan' => 'Lubuk Linggau Timur II',
                ],
                [
                    'id' => '1674041',
                    'kecamatan' => 'Lubuk Linggau Utara I',
                ],
                [
                    'id' => '1674042',
                    'kecamatan' => 'Lubuk Linggau Utara II',
                ],
            ]
        );
        kelurahan::insert(
            [
                [
                    'id' => '1674021002',
                    'kelurahan' => 'Perumnas Rahma',
                    'kec_id' => '1674021'
                ],
            ]
        );
        User::insert(
            [
                [
                    'id' => Str::uuid(),
                    'name' => 'arya',
                    'email' => 'aryasepta7901@gmail.com',
                    'password' => Hash::make('Desacantik1674'),
                    'role' => 'cek',
                    'kel_id' => '1674021002',
                    'rt' => '01',
                ],
                [
                    'id' => Str::uuid(),
                    'name' => 'Aditya',
                    'email' => 'adit1674@gmail.com',
                    'password' => Hash::make('Desacantik1674'),
                    'role' => 'cek',
                    'kel_id' => '1674021002',
                    'rt' => '01',
                ],

            ]
        );
    }
}
