<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('tentang')->insert([
            'id_tentang' => 'TG_001',
            'informasi_umum' => $faker->title(),
            'foto_sampul' => 'test',
            'visi' => $faker->text(),
            'misi' => $faker->text(),
            'tujuan' => $faker->text(),
            'sasaran' => $faker->text()
        ]);
    }
}
