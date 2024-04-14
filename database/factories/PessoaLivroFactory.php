<?php

namespace Database\Factories;

use App\Models\livro;
use App\Models\pessoa;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PessoaLivro>
 */
class PessoaLivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pessoa = pessoa::factory(1)->create()->first();
        $livro = livro::factory(1)->create()->first();
        return [
            'pessoa_id' => $pessoa->id, 
            'livro_id' => $livro->id,
            'data_inicial' => Carbon::now(),
            'data_final' => Carbon::now()
        ];
    }
}
