<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sementara extends Model
{

    protected $table = "sementaras";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_kategori',
        'nama_barang',
        'kuantiti'
    ];
}
