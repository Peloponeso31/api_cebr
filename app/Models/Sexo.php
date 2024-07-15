<?php

namespace App\Models;

use App\Models\Personas\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sexo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class);
    }

    public function perpetradores(): HasMany
    {
        return $this->hasMany(Perpetrador::class);
    }
}
