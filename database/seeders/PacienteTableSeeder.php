<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Models\Paciente');

        foreach (range(1, 40) as $key => $value) {
            \DB::table('pacientes')->insert([
                'nome' => strtoupper($faker->name),
                'telefone_celular' => $faker->numerify('999999999'),
                'cpf_rg' => $faker->unique()->numerify('##########'),
                'estado_civil' => $faker->randomElement($array = array('Casado(a)','Solteiro(a)'), $count = 1),
                'cidade_naturalidade' => $faker->randomElement($array = array('Goiania','Anapolis'), $count = 1),
                'estado_naturalidade' => 'GO',
                'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'sexo' => $faker->randomElement($array = array('Masculino','Feminino'), $count = 1),
                'tipo' => $faker->randomElement($array = array('Aluno', 'Funcionário', 'Dependente', 'Comunidade', 'Serviço Prestado'), $count = 1),
                'cep' => $faker->numerify('65044000'),
                'estado' => 'MA',
                'cidade' => $faker->city,
                'bairro' => $faker->streetName,
                'logradouro' => $faker->streetName,
                'numero' => $faker->numerify('00'),
                'observacao' => $faker->sentence($nbWords = 12, $variableNbWords = true),
            ]);
        }
    }
}
