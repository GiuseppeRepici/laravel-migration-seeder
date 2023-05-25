<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $train = new train();
            $train->azienda = $faker->text(50);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(1,1000);
            $train->numero_carrozze = $faker->numberBetween(1,100);
            $train->data_di_partenza = $faker->randomElement(['2023-05-25','2023-05-26']);
            $train->in_orario = $faker->numberBetween(0,1);
            $train->cancellaro = $faker->numberBetween(0,1);
        }
    }
}
