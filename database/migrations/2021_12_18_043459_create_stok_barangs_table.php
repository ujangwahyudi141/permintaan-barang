<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_barangs', function (Blueprint $table) {
            $table->id('id_barang');
            $table->bigInteger('id_kategori');
            $table->string('nama_barang');
            $table->string('satuan');
            $table->bigInteger('stok');
            $table->bigInteger('keluar');
            $table->bigInteger('sisa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_barangs');
    }
}
