<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendudukTable extends Migration
{
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', '20')->unique();
            $table->string('nama_penduduk', 255);
            $table->string('alamat_penduduk', 255);
            $table->enum('status_menikah', ['sudah', 'belum']);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('foto_penduduk', 100);
            $table->string('pekerjaan', 200);
            $table->string('agama', 100);
            $table->enum('pendidikan_terakhir', ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']);
            $table->enum('golongan_darah', ['o', 'a', 'b', 'ab']);
            $table->enum('status_hidup', ['hidup', 'meninggal']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}