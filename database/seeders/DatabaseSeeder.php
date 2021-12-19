<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Stok_barang;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        User::create([
            'nik' => 1,
            'name' => 'ahmad',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 2,
            'name' => 'ahmadun',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 3,
            'name' => 'siti',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 4,
            'name' => 'alif',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 5,
            'name' => 'heri',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 6,
            'name' => 'asep',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 7,
            'name' => 'arafah',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 3215052406980001,
            'name' => 'ujang wahyudi',
            'password' => '12345',
            'departemen' => 'staff'
        ]);
        User::create([
            'nik' => 3215050304980002,
            'name' => 'ade',
            'password' => '12345',
            'departemen' => 'warehouse'
        ]);
        User::create([
            'nik' => 30,
            'name' => 'salih',
            'password' => '12345',
            'departemen' => 'Manager Warehouse'
        ]);

        Kategori::create([
            'id_kategori' => 1,
            'kategori_barang' => 'Kertas'
        ]);
        Kategori::create([
            'id_kategori' => 2,
            'kategori_barang' => 'Amplop'
        ]);

        Stok_barang::create([
        'id_kategori' => 1,
        'nama_barang' => 'HVS A4',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 1,
        'nama_barang' => 'HVS A1',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 1,
        'nama_barang' => 'HVS A2',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 1,
        'nama_barang' => 'HVS A3',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 1,
        'nama_barang' => 'HVS A5',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 2,
        'nama_barang' => 'Amplop A',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 2,
        'nama_barang' => 'Amplop B',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
        Stok_barang::create([
        'id_kategori' => 3,
        'nama_barang' => 'Amplop C',
        'satuan' => 'Pak',
        'stok' => 500,
        'keluar' => 0,
        'sisa' => 500,
        ]);
    }
}
