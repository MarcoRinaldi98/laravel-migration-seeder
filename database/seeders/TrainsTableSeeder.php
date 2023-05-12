<?php

namespace Database\Seeders;

use App\Models\Train;
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
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');;
            $train->orario_di_arrivo = $faker->dateTimeBetween('+1 week', '+2 week');;
            $train->codice_treno = $faker->bothify('??##??##????');
            $train->carrozze = $faker->numberBetween(1, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
