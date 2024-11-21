<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Nariz */
class NarizResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'persona_id' => $this->persona_id,
            'tipo_nariz' => CatalogoResource::make($this->tipoNariz),
            'especificaciones_nariz' => $this->especificaciones_nariz,
        ];
    }
}
