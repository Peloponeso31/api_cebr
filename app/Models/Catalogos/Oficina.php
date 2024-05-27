<?php

namespace App\Models\Catalogos;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Oficina extends Model
{
    use HasFactory;

     protected $table = 'oficina';
     protected $fillable = ['oficina'];
     public $timestamps = true;

    public function empleado(): HasMany
    {
        return $this->hasMany(Empleado::class);
    }
}
