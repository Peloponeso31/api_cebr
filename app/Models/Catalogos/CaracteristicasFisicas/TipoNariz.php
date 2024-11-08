<?php

namespace App\Models\Catalogos\CaracteristicasFisicas;


use App\Models\Nariz;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoNariz extends Model
{
    protected $table = 'cat_tipos_narices';

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function narices(): HasMany
    {
        return $this->hasMany(Nariz::class);
    }

    public function scopeWithTiposnarizCount($query)
    {
        return $query->withCount('narices');
    }
}
