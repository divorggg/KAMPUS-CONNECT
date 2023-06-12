<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan';

    protected $fillable = [
        'id_perusahaan',
        'posisi',
        'deskripsi',
        'gaji',
        'status',
    ];
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
}
