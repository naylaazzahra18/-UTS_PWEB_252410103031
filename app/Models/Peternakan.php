<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peternakan extends Model
{
    public $timestamps = false;

    public static function daftarInformasi()
    {
        return [
        'Hasil Panen Telur',
        'Kondisi Ayam',
        'Prediksi Panen',
        'Prediksi Ayam Sakit'
        ];
    }
}

