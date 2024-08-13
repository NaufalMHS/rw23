<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurikulumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $incrementing = false;

    public function up()
    {
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->string('kode_matkul', 10);
            $table->string('nama', 100);
            $table->unsignedInteger('sks');
            $table->unsignedInteger('semester');
            $table->enum('tipe', ['w', 'p']);
            $table->longText('keterangan');
            $table->text('slug');

            $table->primary('kode_matkul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurikulum');
    }
}
