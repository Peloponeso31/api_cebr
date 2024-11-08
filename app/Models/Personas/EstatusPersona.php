<?php

namespace App\Models\Personas;

use App\Models\ControlOgpi;
use App\Models\Reportes\Relaciones\Desaparecido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstatusPersona extends Model
{
    protected $table = 'cat_estatus_personas';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'abreviatura'
    ];

    public function desaparecidosRpdno(): HasMany
    {
        return $this->hasMany(Desaparecido::class,'estatus_preliminar_id');
    }

    public function desaparecidosCebv(): HasMany
    {
        return $this->hasMany(Desaparecido::class);
    }

    public function controlOgpis(): HasMany
    {
        return $this->hasMany(ControlOgpi::class);
    }
}
