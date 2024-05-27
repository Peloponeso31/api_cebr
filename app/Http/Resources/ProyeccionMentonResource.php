<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProyeccionMentonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "persona_id"=>$this->persona_id,
            "tipoProyeccionMenton_id"=>$this->tipoProyeccionMenton_id,
            "modificacionProyeccionMenton_id"=>$this->modificacionProyeccionMenton_id,
            "cirugiasProyeccionMenton"=>$this->cirugiasProyeccionMenton
            ];
    }
}
