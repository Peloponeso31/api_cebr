<?php

namespace App\Http\Resources\Personas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Personas\EstatusPersona */
class EstatusPersonaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'abreviatura' => $this->abreviatura,
        ];
    }
}
