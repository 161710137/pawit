<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('merk');
            $table->string('tipe');
            $table->string('gambar');
            $table->UnsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('cascade');
            $table->UnsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('tipes')->onDelete('cascade');
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
        Schema::dropIfExists('mobils');
    }
}