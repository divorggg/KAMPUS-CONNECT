<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    use HasFactory;
    protected $table = 'lamaran';

    protected $fillable = [
        'id_mahasiswa',
        'id_perusahaan',
        'tgl_lamaran',
        'status',
    ];
}
