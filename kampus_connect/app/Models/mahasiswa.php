<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'pp',
        'email',
        'no_hp',
        'des',
        'job',
        'pendidikan',
        'keterampilan',
        'pengalaman',
    ];
    protected $attributes = [
        'pp' => '../img/undraw_profile.svg',
        'alamat' => '',
        'email' => '',
        'no_hp' => '',
        'keterampilan' => '',
        'pengalaman' => '',
        'des' => '',
        'job' => 'Mahasiswa',
        'pendidikan' => '',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->nama = "user_" . Str::random(6);
        });
    }
}
