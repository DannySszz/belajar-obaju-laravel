<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master extends Model
{

	protected $table = "masters";

    protected $fillable = [
        'id', 'judul', 'keterangan','harga', 'gambar1','gambar2', 'gambar3', 'new','sale', 'gift','model','kategori'
    ];
}
