<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livro>
 */
class livroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //'nome', 'quantidade', 'data_cadastro', 'autor'
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'nome' => $faker->name(),
            'quantidade' => $faker->numerify('##'),
            'data_cadastro' => Carbon::now(),
            'autor' => $faker->name()        
        ];
    }
}
