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
        Schema::table('conta', function (Blueprint $table) {
            $table->foreignId('pessoa_id')->nullable(true)->constrained('pessoa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conta', function (Blueprint $table) {
            $table->dropForeign(['pessoa_id']);
			$table->dropColumn(['pessoa_id']);
        });
    }
};
