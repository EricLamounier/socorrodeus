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
        Schema::create('livro', function(Blueprint $table){
            $table->id();
            $table->string('nome')->unique()->nullable(false);
            $table->integer('quantidade')->nullable(false);
            $table->dateTime('data_cadastro')->nullable(true);
            $table->string('autor')->nullable(false);
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
