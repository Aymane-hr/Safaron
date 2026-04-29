<?php

namespace Database\Seeders;

use App\Models\TypeVoyage;
use Illuminate\Database\Seeder;

class TypeVoyageSeeder extends Seeder
{
    public function run(): void
    {
        TypeVoyage::factory()->count(5)->create();
    }
}
