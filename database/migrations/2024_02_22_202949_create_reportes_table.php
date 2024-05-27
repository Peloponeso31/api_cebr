<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tipo_reporte_id')->constrained(table: 'tipos_reportes', indexName: 'idx_reportes_tipo_reporte');

            $table->foreignId('area_atiende_id')->nullable()->constrained(table: 'areas', indexName: 'idx_reportes_area');

            $table->foreignId('medio_conocimiento_id')->nullable()->constrained(table: 'medios', indexName: 'idx_reportes_medio');

            $table->foreignId('zona_estado_id')->nullable()->constrained(table: 'zonas_estados', indexName: 'idx_reportes_zona_estado');

            $table->foreignId('hipotesis_oficial_id')->nullable()->constrained(table: 'tipos_hipotesis', indexName: 'idx_reportes_hipotesis_oficial');

            $table->enum('tipo_desaparicion', ['U', 'M']);
            $table->date('fecha_localizacion')->nullable();
            $table->text('sintesis_localizacion')->nullable();
            $table->string('clasificacion_persona')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
