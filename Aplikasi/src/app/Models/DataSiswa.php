<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSiswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswas';
    protected $fillable = ([
        'Nama',
        'Jenis_Kelamin',
        'Nama_Orang_Tua',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Agama',
        'Alamat',
    ]);
}
