<?php

namespace App\Models\Catalogos\CaracteristicasFisicas;

use App\Models\CaracteristicasFisicas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EspecificacionBigote extends Model
{
    use HasFactory;

    protected $table="especificacion_bigotes";
    protected $fillable=['especificacionBigote'];
    public $timestamps= true;

    public function caracteristicas_fisicas():HasMany {
        return $this->hasMany(CaracteristicasFisicas::class);
    }
}
