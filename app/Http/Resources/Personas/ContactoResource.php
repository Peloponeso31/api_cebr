<?php

namespace App\Http\Resources\Personas;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactoResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
       return [
        'persona_id'=> $this -> persona_id,
        'tipo'=> $this -> tipo,
        'contacto'=> $this -> contacto,
        'observaciones'=> $this -> observaciones,
       ];
    }
}
