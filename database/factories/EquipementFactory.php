<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipementFactory extends Factory
{
    public function definition(): array
    {
        $equipements = ['WiFi', 'Climatisation', 'Toilettes', 'Prise USB', 'Siège inclinable', 'Télévision', 'Liseuse'];
        return [
            'equipement' => $this->faker->unique()->randomElement($equipements),
        ];
    }
}
