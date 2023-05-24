<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupirsTable extends Migration
{
    public function up()
    {
        Schema::create('supirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pegawai');
            $table->string('nama');
            $table->string('mobil');
            $table->string('plat_nomor');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
