<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Pessoa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conta>
 */
class ContaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');
        //$pessoa = Pessoa::factory(1)->create()->first();
        return [
            'nome' => $faker->text(8),
            'valor' => $faker->randomDigit,
            'data' => Carbon::now(),
            'situacao' => $faker->numberBetween(0,1),
            'tipo' => $faker->numberBetween(0,1),
            'pessoa_id_fk' => 1,//$pessoa->id,
        ];
    }
}
