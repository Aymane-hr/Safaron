<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('raison_social');
            $table->string('adresse');
            $table->string('ville');
            $table->string('tel');
            $table->string('nom_contact');
            $table->string('email');
            $table->string('ice');
            $table->string('logo')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societes');
    }
};
