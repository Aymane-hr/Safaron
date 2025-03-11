<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    //use HasFactory;
    protected $guarded = ['id'];
    public function autocars()
    {
        return $this->hasMany(Autocar::class);
    }

    public function autocarEquipements()
    {
        return $this->belongsToMany(Autocar::class, 'autocar_equipements', 'equipement_id', 'autocar_id');
    }
}
