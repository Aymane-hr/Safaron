<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

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
