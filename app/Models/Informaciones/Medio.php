<?php

namespace App\Models\Informaciones;

use App\Models\Reportes\Reporte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medio extends Model
{
    protected $table = 'cat_medios';

    protected $fillable = [
        'tipo_medio_id',
        'nombre',
    ];

    public $timestamps = false;

    /**
     * Get the tipo de medio that owns the medio.
     *
     * @return BelongsTo
     */
    public function tipoMedio(): BelongsTo
    {
        return $this->belongsTo(TipoMedio::class, 'tipo_medio_id');
    }

    /**
     * Get all the reportes for the medio.
     *
     * @return HasMany
     */
    public function reportes(): HasMany
    {
        return $this->hasMany(Reporte::class);
    }
}
