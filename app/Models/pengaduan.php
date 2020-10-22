<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengaduan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'tanggal_pengaduan',
        'tanggal_selesai',
        'nik',
        'jenis',
        'judul',
        'isi_laporan',
        'kota',
        'kategori',
        'file', 
        'status', 
    ];
}
