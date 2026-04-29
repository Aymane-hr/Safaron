<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModeReglement;

class ModeReglementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modes = [
            ['mode_reglement' => 'Espèces'],
            ['mode_reglement' => 'Carte Bancaire'],
            ['mode_reglement' => 'Virement'],
        ];

        foreach ($modes as $mode) {
            ModeReglement::firstOrCreate($mode);
        }
    }
}
