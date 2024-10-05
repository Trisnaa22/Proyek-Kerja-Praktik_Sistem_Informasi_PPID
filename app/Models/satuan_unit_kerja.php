<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan_unit_kerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perangkat_daerah',
        'alamat_perangkat_daerah',
        'telepon',
    ];
}
