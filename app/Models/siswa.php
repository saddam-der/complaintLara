<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'nisn';

    protected $fillable = [
        'nama',
        'agama',
        'alamat',
        'jurusan',
        'nohp',
        'image',
        'jenis_kelamin',
    ];
}
