<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conta', function (Blueprint $table){
            $table->id()->nullable(false);
            $table->string('nome')->nullable(false);
            $table->double('valor')->default(0)->nullable(false);
            $table->string('tipo')->default(0)->nullable(false);
            $table->integer('situacao')->default(0)->nullable(false);
            $table->date('data')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(false);
            $table->date('data_criacao')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};
