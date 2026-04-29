<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Voyage;
use App\Models\ModeReglement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        $voyage = Voyage::inRandomOrder()->first() ?? Voyage::factory()->create();

        return [
            'date_reservation' => $this->faker->date(),
            'num_siege' => $this->faker->numberBetween(1, 30),
            'prix' => $voyage->prix,
            'frais' => 0,
            'date_depart' => $voyage->date_depart,
            'heure_depart' => $voyage->heure_depart,
            'date_arrivee' => $voyage->date_arrivee,
            'heure_arrivee' => $voyage->heure_arrivee,
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'ville_depart_id' => $voyage->ville_depart_id,
            'ville_arrivee_id' => $voyage->ville_arrivee_id,
            'mode_reglement_id' => ModeReglement::inRandomOrder()->first()->id ?? 1,
            'autocar_id' => $voyage->autocar_id,
            'type_voyage_id' => $voyage->type_voyage_id,
            'voyage_id' => $voyage->id,
        ];
    }
}
