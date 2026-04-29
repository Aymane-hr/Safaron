<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OptionFactory extends Factory
{
    public function definition(): array
    {
        $options = ['Repas inclus', 'Assurance annulation', 'Bagage supplémentaire', 'Choix de siège', 'Boisson offerte'];
        return [
            'option' => $this->faker->unique()->randomElement($options),
        ];
    }
}
