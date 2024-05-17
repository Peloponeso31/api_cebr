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
        Schema::create('nacionalidad_persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id');
            $table->foreignId('nacionalidad_id')->constrained(table: 'nacionalidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nacionalidad_persona');
    }
};
