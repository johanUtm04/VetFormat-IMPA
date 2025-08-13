<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonalAtiendeSeeder extends Seeder
{

    public function run(): void
    {
 $faker = Faker::create();    
 // Insertar 10 registros de prueba
        for ($i = 0; $i < 10; $i++) {
            DB::table('personal_atiende')->insert([
                'Nombres'   => $faker->firstName,
                'A_Paterno' => $faker->lastName,
                'A_Materno' => $faker->lastName,
            ]);
        }
    }



}

