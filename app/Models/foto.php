<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    protected $table = "fotos";

    protected $fillable = [
        'judul',
        'deskripsi',
    ];
}
