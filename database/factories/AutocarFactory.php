<?php

namespace Database\Factories;

use App\Models\Societe;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutocarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nbr_siege' => $this->faker->numberBetween(30, 55),
            'image' => null, // Optional
            'matricule' => $this->faker->regexify('[0-9]{4,5}-[A-Z]-[0-9]{1,2}'),
            'societe_id' => Societe::inRandomOrder()->first()->id ?? Societe::factory(),
        ];
    }
}
