<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MarcaVehiculo extends Model
{
    public $timestamps = false;

    protected $table = 'cat_marcas_vehiculos';

    protected $fillable = [
        'nombre',
    ];

    public function vehiculos(): HasMany
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function scopeWithMarcasVehiculosCount($query)
    {
        return $query->withCount('vehiculos');
    }
}
