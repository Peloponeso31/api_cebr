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
        Schema::create('senas_particulares', function (Blueprint $table) {
            $table->id();
            $table->foreignId("persona_id")->nullable();
            $table->foreignId("region_cuerpo_id");
           // $table->foreignId("region_cuerpo_rnpdno_id")->nullable();
            $table->foreignId("vista_id");
            $table->foreignId("lado_id");
            $table->foreignId("tipo_id");
            $table->integer("cantidad")->nullable()->default(0);
            $table->string("descripcion")->nullable();
            $table->string("foto")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senas_particulares');
    }
};
