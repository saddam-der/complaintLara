<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('siswas')->insert([
                'nama' => $faker->name,
                'agama' => $faker->city,
                'alamat' => $faker->address,
                'nohp' => $faker->phoneNumber,

                'foto' => $faker->imageUrl,
            ]);
        }
    }
}
