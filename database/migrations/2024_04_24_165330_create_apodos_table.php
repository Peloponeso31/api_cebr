<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('apodos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id');
            $table->string('nombre')->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apodos');
    }
};
