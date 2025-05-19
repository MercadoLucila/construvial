<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Tractor','Retroexcadora','Cargadora Frontal','Motoniveladora','Rodillo/Aplanadora','Asfaltadora','Camion Cisterna','Camion de volteo','Pala y Retroexcadaora','Topadora'])
        ];
    }
}
