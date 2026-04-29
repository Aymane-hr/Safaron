<?php

namespace Database\Seeders;

use App\Models\Autocar;
use Illuminate\Database\Seeder;

class AutocarSeeder extends Seeder
{
    public function run(): void
    {
        Autocar::factory()->count(20)->create();
    }
}
