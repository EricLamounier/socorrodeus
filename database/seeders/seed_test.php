<?php

namespace Database\Seeders;

use App\Models\livro;
use App\Models\pessoa;
use App\Models\PessoaLivro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class seed_test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pessoa::factory()->count(6)->create();
        livro::factory()->count(6)->create();
        PessoaLivro::factory()->count(3)->create();
    }
}
