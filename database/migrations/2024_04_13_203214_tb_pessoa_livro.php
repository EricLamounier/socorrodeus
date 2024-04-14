<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pessoa_livro', function(Blueprint $table){
            $table->id();
            $table->foreignId('pessoa_id')->constrained('pessoa')->nullable(false);
            $table->foreignId('livro_id')->constrained('livro')->nullable(false);
            $table->dateTime('data_inicial')->nullable(false);
            $table->dateTime('data_final')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
