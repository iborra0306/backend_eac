<?php

namespace Database\Factories;

use App\Models\Modulo;
use App\Models\ResultadoAprendizaje;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResultadoAprendizaje>
 */
class ResultadoAprendizajeFactory extends Factory
{
    protected $model = ResultadoAprendizaje::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Crea un módulo automáticamente si no se le pasa uno
            'modulo_id'   => Modulo::factory(),

            // Genera un código único de hasta 5 caracteres (ej: RA1, RA25)
            'codigo'      => 'RA' . $this->faker->unique()->numberBetween(1, 999),

            'descripcion' => $this->faker->sentence(10),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
