<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TamanoBoca extends Model
{
    public $timestamps = false;

    protected $table = 'cat_tamanos_boca';

    protected $fillable = [
        'nombre',
    ];

    public function bocas(): HasMany
    {
        return $this->hasMany(Boca::class);
    }

    public function scopeWithTamanosbocasCount($query)
    {
        return $query->withCount('bocas');
    }


}
