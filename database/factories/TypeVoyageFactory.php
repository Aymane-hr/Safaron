<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeVoyageFactory extends Factory
{
    public function definition(): array
    {
        $types = ['Standard', 'Confort', 'Premium', 'VIP', 'Economique'];
        return [
            'type_voyage' => $this->faker->unique()->randomElement($types),
        ];
    }
}
