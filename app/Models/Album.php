<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal',
        'UserID',
    ];
}
