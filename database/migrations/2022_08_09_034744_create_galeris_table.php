<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $incrementing = false;

    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('id_galeri', 10);
            $table->string('id_kategori', 10);
            $table->string('judul', 50);
            $table->text('deskripsi');
            $table->text('foto');

            $table->primary('id_galeri');
            $table->unique('id_kategori');
        });

        Schema::create('kategori', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('id_kategori', 10);
            $table->string('nama_kategori', 50);

            $table->primary('id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('kategori');
    }
}
