<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan_barang extends Model
{
    protected $table = 'permintaan_barangs';
    protected $primaryKey = 'id_permintaan';
    protected $fillable = [
        'id_permintaan',
        'nik',
        'departemen',
        'id_barang',
        'id_kategori',
        'jumlah',
        'status',
        'tgl_permintaan'
    ];
}
