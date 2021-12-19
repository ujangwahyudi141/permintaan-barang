<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_barangs', function (Blueprint $table) {
            $table->id('id_permintaan');
            $table->bigInteger('nik');
            $table->string('departemen');
            $table->bigInteger('id_barang');
            $table->bigInteger('id_kategori');
            $table->bigInteger('jumlah');
            $table->integer('status');
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
        Schema::dropIfExists('permintaan_barangs');
    }
}
