<?php

namespace App\Http\Resources\Contextos;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContextoSocialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'persona_id'=> $this -> persona_id,
        "pasatiempos"=> $this-> pasatiempos,
        "club_organizacion"=> $this-> club_organizacion,
        "estudio"=> $this-> estudio,
        "amistades"=> $this-> amistades,
        "amistades_municipio"=> $this-> amistades_municipio,
        "correo_electronico"=> $this-> correo_electronico,
        "nombre_redes_sociales"=> $this-> nombre_redes_sociales,
        "lugares_frecuentes"=> $this-> lugares_frecuentes,
        "vivienda_estado" => $this-> vivienda_estado
        ];
    }
}
