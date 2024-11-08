<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TamanoCabello extends Model
{
    public $timestamps = false;

    protected $table = 'cat_tamanos_cabello';

    protected $fillable = [
        'nombre',
    ];

    public function cabellos(): HasMany
    {
        return $this->hasMany(Cabello::class);
    }

    public function scopeWithTamanoscabellosCount($query)
    {
        return $query->withCount('cabellos');
    }
}
