<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukBermasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_bermasalah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomor_postingan');
            $table->string('nama_produk');
            $table->integer('kuantiti');
            $table->string('permasalahan');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('nomor_postingan')->references('id')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_bermasalah');
    }
}
