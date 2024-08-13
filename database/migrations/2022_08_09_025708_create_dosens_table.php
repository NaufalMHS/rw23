<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $incrementing = false;

    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('nidn', 15);
            $table->string('nama_dosen', 50);
            $table->text('keahlian');
            $table->text('matkul');
            $table->text('images');
            $table->text('name_slug');

            $table->primary('nidn');
        });

        Schema::create('pendidikan_dosen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('nidn', 15);
            $table->string('s1', 70)->nullable();
            $table->string('s2', 70)->nullable();
            $table->string('s3', 70)->nullable();

            $table->unique('nidn'); 
        });

        Schema::create('publikasi_dosen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('nidn', 15);
            $table->text('data_publikasi')->nullable();

            $table->unique('nidn');
        });

        Schema::create('referensi_dosen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('nidn', 15);
            $table->string('google_scholar', 50)->nullable();
            $table->string('shinta', 50)->nullable();
            $table->string('scopus', 50)->nullable();
            
            $table->unique('nidn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
        Schema::dropIfExists('pendidikan_dosen');
        Schema::dropIfExists('publikasi_dosen');
        Schema::dropIfExists('referensi_dosen');
    }
}
