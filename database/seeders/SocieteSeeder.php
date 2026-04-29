<?php

namespace Database\Seeders;

use App\Models\Societe;
use Illuminate\Database\Seeder;

class SocieteSeeder extends Seeder
{
    public function run(): void
    {
        Societe::factory()->count(10)->create();
    }
}
