<?php

namespace Database\Factories\Personas;

use App\Models\Personas\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    
    public function definition(): array
    {
        $tipos = ['Red Social','Correo Electronico'];
        return [
            'persona_id' => Persona::factory(),
            'tipo' => fake() -> randomElement($tipos),
            'contacto' => fake() -> userName(),
            'observaciones' => fake() -> text(),
        ];
    }
    
}
