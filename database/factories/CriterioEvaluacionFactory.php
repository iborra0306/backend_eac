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
            'resultado_aprendizaje_id' => \App\Models\ResultadoAprendizaje::factory(),
            'codigo'                   => 'CE' . $this->faker->unique()->bothify('#?'),
            'descripcion'              => $this->faker->sentence(),
            // 'peso_porcentaje'          => $this->faker->randomElement([20, 25, 30, 50]),
            // 'orden'                    => $this->faker->numberBetween(1, 10),
        ];
    }
}
