<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = [
            'Admin',"Guru",'Guru Mapel', 'Siswa'
        ];

        foreach ($roles as $key => $value) {
            $data = new Role();
            $data->title = $value;
            $data->name = str_replace(' ', '_', strtolower($value));
            $data->updated_at = date('Y-m-d H:i:s');
            $data->created_at = date('Y-m-d H:i:s');
            $data->save();
        }
    }
}
