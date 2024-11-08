<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoOcupacion extends Model
{
    public $timestamps = false;

    protected $table = 'cat_tipos_ocupacion';

    protected $fillable = [
        'nombre',
    ];

    public function ocupaciones(): HasMany
    {
        return $this->hasMany(Ocupacion::class);
    }

    public function scopeWithTipoocupacionesCount($query)
    {
        return $query->withCount('ocupaciones');
    }
}
