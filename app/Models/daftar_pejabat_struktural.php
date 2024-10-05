<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_pejabat_struktural extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'perangkat_daerah',
        'satuan_unit_kerja',
        'jabatan',
        'golongan',
    ];
}
