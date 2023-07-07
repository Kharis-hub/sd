<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        "role_id",
        "person_id"
    ];
    public function guru() {
        return $this->belongsTo(Guru::class);
    }
    public function person() {
        return $this->belongsTo(Person::class);
    }

    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }


    public function isAdmin()
    {
        return $this->role_id == 1 ? true : false;
    }

    public function isGuru()
    {
        return $this->role_id == 2 || $this->role_id == 3 ? true : false;
    }
    public function isSiswa()
    {
        return $this->role_id == 4 ? true : false;
    }


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

}
