<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaPrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_prestasi', function (Blueprint $table) {
            $table->string('nrp_mhs', 11);
            $table->string('nama', 150);
            $table->text('pict');
            $table->longText('prestasi');
            $table->text('name_slug');

            $table->primary('nrp_mhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_prestasi');
    }
}
