<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::truncate();

        $data = [
            [
                "nis"=> "098123",
                "nama"=> "Menghemaskan",
                "jekel"=> "perempuan",
                "tempat_lahir"=> "Lampung",
                "tanggal_lahir"=>Carbon::parse("2022-08-19"),
                "agama"=> "islam",
                "alamat"=> "Lampung",
                "kelas"=> "4",
                "tahun_masuk"=> "2022",
                "image"=> "default.jpg",
                "role_id"=> 4,
                "password" => Hash::make('password'),
                "is_active"=> true,
            ],
            [
                "nis"=> "098712345",
                "nama"=> "Isikawa Sumutsu",
                "jekel"=> "laki-laki",
                "tempat_lahir"=> "Loram",
                "tanggal_lahir"=>Carbon::parse("2000-12-20"),
                "agama"=> "islam",
                "alamat"=> "Lampung",
                "kelas"=> "4",
                "tahun_masuk"=> "2022",
                "image"=> "default.jpg",
                "role_id"=> 4,
                "password" => Hash::make('password'),
                "is_active"=> true,
            ],


        ];

        foreach ($data as $item) {


            $siswa = Siswa::create([
                "nis"=> $item['nis'],
                "nama"=> $item['nama'],
                "jekel"=> $item['jekel'],
                "tempat_lahir"=> $item['tempat_lahir'],
                "tanggal_lahir"=> $item['tanggal_lahir'],
                "agama"=> $item['agama'],
                "alamat"=> $item['alamat'],
                "kelas"=> $item['kelas'],
                "tahun_masuk"=> $item['tahun_masuk'],
                "image"=> $item['image'],
                "is_active"=> $item['is_active'],

            ]);

            $user = User::create([
                'name' => $item['nama'],
                'username' =>  $item['nis'],
                'password' => $item['password'],
                "role_id"=> $item['role_id'],
                "person_id"=> $siswa->id,
            ]);
        }
    }
}
