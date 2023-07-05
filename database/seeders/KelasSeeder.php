<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::truncate();
        for ($i=1; $i <= 6; $i++) {
            Kelas::create([
                'kelas' => $i
            ]);
        }
    }
}
