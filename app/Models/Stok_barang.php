<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok_barang extends Model
{
    protected $table = 'stok_barangs';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'id_barang',
        'id_kategori',
        'nama_barang',
        'satuan',
        'stok',
        'keluar',
        'sisa',
        'tgl_masuk',
    ];
}
