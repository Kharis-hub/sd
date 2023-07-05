<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();
        $person =Person::create([
            'nama' => "Eggy Andika Wardani",
            'image' => 'default.jpg',
            'is_active' => true
        ]);
        $user = User::create([
            'name' => "Eggy Andika Wardani",
            'username' =>  "1999",
            'password' => Hash::make('123'),
            "role_id"=> 1,
            "person_id"=> $person->id,
        ]);



    }
}
