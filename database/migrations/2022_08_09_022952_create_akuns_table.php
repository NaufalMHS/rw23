<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $incrementing = false;


    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table -> engine = 'InnoDB';

            $table->string('id_akun', 10);
            $table->string('nama', 100);
            $table->string('username', 50);
            $table->longText('password');
            $table->longText('profile_pict');

            $table->primary('id_akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun');
    }
}
