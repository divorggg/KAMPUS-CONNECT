<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';

    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi',
        'industri',
        'logo'
    ];

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'id_perusahaan');
    }
}
