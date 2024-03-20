<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('desaparecidos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reporte_id');
            $table->foreignId('persona_id');
            $table->foreignId('estatus_rpdno_id')->constrained('estatus_personas');
            $table->foreignId('estatus_cebv_id')->constrained('estatus_personas');

            $table->boolean('habla_espanhol')->nullable();
            $table->boolean('sabe_leer')->nullable();
            $table->boolean('sabe_escribir')->nullable();
            $table->string('url_boletin')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('desaparecidos');
    }
};