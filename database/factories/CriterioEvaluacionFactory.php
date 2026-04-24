<?php

namespace Database\Factories;

use App\Models\CriterioEvaluacion;
use App\Models\ResultadoAprendizaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriterioEvaluacionFactory extends Factory
{
    protected $model = CriterioEvaluacion::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // Si no le pasas un RA, crea uno nuevo automáticamente
            'resultado_aprendizaje_id' => ResultadoAprendizaje::factory(),

            // Genera algo tipo "CE1a", "CE2b"...
            // El lexify pone una letra aleatoria al final
            'codigo' => $this->faker->unique()->lexify('CE' . $this->faker->numberBetween(1, 9) . '?'),

            'descripcion' => $this->faker->paragraph(1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
