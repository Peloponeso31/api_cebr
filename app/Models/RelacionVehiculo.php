<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RelacionVehiculo extends Model
{
    public $timestamps = false;

    protected $table = 'cat_relaciones_vehiculos';

    protected $fillable = [
        'nombre',
    ];

    public function vehiculos(): HasMany
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function scopeWithRelacionVehiculoCount($query)
    {
        return $query->withCount('vehiculos');
    }

}
