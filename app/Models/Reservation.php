<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'date_reservation',
        'num_siege',
        'prix',
        'frais',
        'date_depart',
        'heure_depart',
        'date_arrivee',
        'heure_arrivee',
        'user_id',
        'ville_depart_id',
        'ville_arrivee_id',
        'mode_reglement_id',
        'autocar_id',
        'type_voyage_id',
    ];
}
