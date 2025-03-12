<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];

    //=========== Relations ===========
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function villeArrivee()
    {
        return $this->belongsTo(Ville::class);
    }

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class);
    }

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    public function modeReglement()
    {
        return $this->belongsTo(ModeReglement::class);
    }

    public function autocar()
    {
        return $this->belongsTo(Autocar::class);
    }
}
