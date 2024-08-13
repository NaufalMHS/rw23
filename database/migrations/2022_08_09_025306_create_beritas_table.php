<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $incrementing = false;

    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('id_berita', 10);
            $table->string('judul', 100);
            $table->date('tgl_kirim');
            $table->date('tgl_update');
            $table->longText('isi');
            $table->text('sampul');
            $table->text('url_slug');

            $table->primary('id_berita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
