<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMhs extends Model
{
    use HasFactory;

    protected $table = 'detail_mhs';

    protected $fillable = [
        'idmhs',
        'name',
        'tipe',
        'kantor',
        'rentang',
        'detail',
    ];
    protected $attributes = [
        'idmhs' => '',
        'name' => '',
        'tipe' => '',
        'kantor' => '',
        'rentang' => '',
        'detail' => '',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'idmhs');
    }
}
