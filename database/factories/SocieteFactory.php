<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocieteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'raison_social' => $this->faker->company,
            'adresse' => $this->faker->address,
            'ville' => $this->faker->city,
            'tel' => $this->faker->phoneNumber,
            'nom_contact' => $this->faker->name,
            'email' => $this->faker->unique()->companyEmail,
            'ice' => $this->faker->numerify('################'),
            'logo' => null, // Optional, can be seeded manually or left null
        ];
    }
}
