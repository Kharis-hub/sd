<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;

class UserController extends Controller
{
    public function guru()
    {
        $data['guru'] = Guru::where('jekel', 'laki-laki')->get();
        return view('guru', $data);
    }

    public function mapel()
    {
        $data['mapel'] = Mapel::where('mapel', 'bahasa inggris')->get();
        return view('mapel', $data);
    }
}
