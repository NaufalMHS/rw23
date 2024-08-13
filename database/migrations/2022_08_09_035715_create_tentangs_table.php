<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentang', function (Blueprint $table) {
            $table->string('id_tentang', 10);
            $table->text('informasi_umum');
            $table->text('foto_sampul');
            $table->text('visi');
            $table->text('misi');
            $table->text('tujuan');
            $table->text('sasaran');
            $table->text('strategi');

            $table->primary('id_tentang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tentang');
    }
}
