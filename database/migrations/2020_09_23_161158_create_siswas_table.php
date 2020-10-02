<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('nisn');
            $table->string('nama', 100);
            $table->enum('jurusan', ['Rekayasa Perangkat Lunak', 'Multimedia', 'Teknik Jaringan Komputer', 'Broadcast']);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('agama', 100);
            $table->text('alamat');
            $table->string('nohp', 100);
            $table->string('foto', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
