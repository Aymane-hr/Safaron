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

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_reservation');
            $table->bigInteger('num_siege');
            $table->float('prix');
            $table->float('frais');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->date('date_arrivee');
            $table->time('heure_arrivee');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('ville_depart_id');
            $table->foreign('ville_depart_id')->references('id')->on('villes');
            $table->unsignedBigInteger('ville_arrivee_id');
            $table->foreign('ville_arrivee_id')->references('id')->on('villes');
            $table->unsignedBigInteger('mode_reglement_id');
            $table->foreign('mode_reglement_id')->references('id')->on('mode_reglements');
            $table->unsignedBigInteger('autocar_id');
            $table->foreign('autocar_id')->references('id')->on('autocars');
            $table->unsignedBigInteger('type_voyage_id');
            $table->foreign('type_voyage_id')->references('id')->on('type_voyages');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
