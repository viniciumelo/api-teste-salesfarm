<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ExameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Models\Exame');

        foreach (range(1, 30) as $key => $value) {
            \DB::table('exames')->insert([
                'paciente_id' => $value,
                'data' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
                'pressao' => $faker->numerify('1#/#'),
                'altura' => $faker->numberBetween($min = 140, $max = 200),
                'peso' => $faker->numberBetween($min = 45, $max = 150),
                'glicemia' => $faker->numberBetween($min = 80, $max = 130),
                'temperatura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 30, $max = 38),
                'frequencia_cardiaca' => $faker->numberBetween($min = 60, $max = 120),
                'frequencia_respiratoria' => $faker->numberBetween($min = 90, $max = 150),
                'enfermeiro' => $faker->randomElement($array = array ('Guilherme de Oliveira','Lorena Tavares')),
            ]);
        }
    }
}
