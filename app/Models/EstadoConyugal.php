<?php

namespace App\Models;

use App\Models\Personas\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EstadoConyugal extends Model
{
    public $timestamps = false;

    protected $table = 'estados_conyugales';

    protected $fillable = [
        'nombre', 
    ];

    public function persona(): HasOne
    {
        return $this->hasOne(Persona::class); 
    }
}
