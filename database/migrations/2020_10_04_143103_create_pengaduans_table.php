<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->increments('id_pengaduan');
            $table->date('tanggal_pengaduan');
            $table->date('tanggal_selesai');
            $table->integer('nik');
            $table->string('jenis');
            $table->string('judul');
            $table->string('isi_laporan');
            $table->string('kota');
            $table->string('kategori');
            $table->string('file');
            $table->enum('status', ['pending', 'proses','selesai']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
}
