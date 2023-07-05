<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::truncate();

        $data = [
            [
                "mapel"=> null,
                "card_id"=> "196301081984051002",
                "card_type"=> 'nip',
                "nama"=> "Siswanto, S. Pd.",
                "jekel"=> "laki-laki",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("1963-01-08"),
                "agama"=> "Islam",
                "alamat"=> "Hadiwarno",
                "kelas"=> "5",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],
            [
                "mapel"=> null,
                "card_id"=> "196608201992112001",
                "card_type"=> 'nip',
                "nama"=> "Siti Lestari, S. Pd.",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("2022-10-15"),
                "agama"=> "Islam",
                "alamat"=> "Tenggeles",
                "kelas"=> "1",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],
            [
                "mapel"=> 1,
                "card_id"=> "199402012019032015",
                "card_type"=> 'nip',
                "nama"=> "Nurul Hikmah, S.Pd.I.",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("2022-01-01"),
                "agama"=> "Islam",
                "alamat"=> "Kesambi",
                "kelas"=> "1,2,3,4,5,6",
                "image"=> "default.jpg",
                "role_id"=> 3,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],

            [
                "mapel"=> null,
                "card_id"=> "199402272019031013",
                "card_type"=> 'nip',
                "nama"=> "Fachrul Tri Hidayatullah, S.Pd.",
                "jekel"=> "laki-laki",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("2022-01-01"),
                "agama"=> "Islam",
                "alamat"=> "Prambatan Kidul",
                "kelas"=> "6",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],
            [
                "mapel"=> null,
                "card_id"=> "8999998",
                "card_type"=> 'nik',
                "nama"=> "Mohammad Aniq, S. Pd.",
                "jekel"=> "laki-laki",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("1992-01-29"),
                "agama"=> "Islam",
                "alamat"=> "Hadiwarno",
                "kelas"=> "4",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],
            [
                "mapel"=> null,
                "card_id"=> "89999128",
                "card_type"=> 'nik',
                "nama"=> "Wulan Andriyani, S. Pd.",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("1994-08-16"),
                "agama"=> "Islam",
                "alamat"=> "Honggosoco",
                "kelas"=> "2",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],


            [
                "mapel"=> 10,
                "card_id"=> "87766677",
                "card_type"=> 'nik',
                "nama"=> "Rahayu Fitriani",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("1997-02-14"),
                "agama"=> "Islam",
                "alamat"=> "Jurang",
                "kelas"=> "1,2,3,4,5,6",
                "image"=> "default.jpg",
                "role_id"=> 3,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],


            [
                "mapel"=> null,
                "card_id"=> "7161718819",
                "card_type"=> 'nik',
                "nama"=> "Noer Cahyani Hidayah, S.Pd.",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Kudus",
                "tanggal_lahir"=> Carbon::parse("1998-04-10"),
                "agama"=> "Islam",
                "alamat"=> "Jojo",
                "kelas"=> "3",
                "image"=> "default.jpg",
                "role_id"=> 2,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],

            [
                "mapel"=> 1,
                "card_id"=> "098765432",
                "card_type"=> 'nip',
                "nama"=> "Yudha Rahma Saputra",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "JEPARA",
                "tanggal_lahir"=> Carbon::parse("2005-02-04"),
                "agama"=> "Kristen",
                "alamat"=> "Barat",
                "kelas"=> "2,4,5,6",
                "image"=> "default.jpg",
                "role_id"=> 3,
                "is_active"=> true,
                'password' => Hash::make('password')
            ],


        ];

        foreach ($data as $item) {
            $guru = Guru::create([
                "mapel"=> $item['mapel'],
                "card_id"=> $item['card_id'],
                "card_type"=> $item['card_type'],
                "nama"=> $item['nama'],
                "jekel"=> $item['jekel'],
                "tempat_lahir"=> $item['tempat_lahir'],
                "tanggal_lahir"=> $item['tanggal_lahir'],
                "agama"=> $item['agama'],
                "alamat"=> $item['alamat'],
                "kelas"=> json_encode([$item['kelas']]),
                "image"=> $item['image'],
                "is_active"=> $item['is_active'],

            ]);
            $user = User::create([
                'name' => $item['nama'],
                'username' =>  $item['card_id'],
                'password' => $item['password'],
                "role_id"=> $item['role_id'],
                "person_id"=> $guru->id,
            ]);


        }
    }
}
