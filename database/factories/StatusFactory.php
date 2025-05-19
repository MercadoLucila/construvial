<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = [
            'Disponible' => 'La maquinaria está libre y lista para ser asignada.',
            'En uso' => 'La maquinaria actualmente está asignada a una obra.',
            'En mantenimiento' => 'La maquinaria está siendo revisada o reparada.',
            'Deshabilitada' => 'La maquinaria está fuera de servicio y no se puede utilizar.',
            'En camino' => 'La maquinaria está en traslado hacia una obra.',
        ];

        $name = $this->faker->unique()->randomElement(array_keys($statuses));

        return [
            'name' => $name,
            'description' => $statuses[$name],
        ];
    }
}
