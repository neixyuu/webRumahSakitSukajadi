<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    
    protected $fillable = [
        'nama',
        'no_telp',
        'email',
        'no_rm',
        'kategori',
        'lokasi',
        'tanggal_kejadian',
        'message',
        'status'
    ];
}