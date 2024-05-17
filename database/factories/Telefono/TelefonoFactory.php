<?php

namespace Database\Factories\Telefono;

use App\Models\Telefono\CompaniaTelefonica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefonos>
 */
class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "observaciones" => fake() -> text(),
            "numero" => fake()->phoneNumber(),
            "compania_id" => CompaniaTelefonica::inRandomOrder()->first()->id,
        ];
       
    }
}
