<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	protected $table = "mahasiswas";

    protected $fillable = [
        'nama', 'email', 'alamat',
    ];
}
