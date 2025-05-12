<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autocar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function societe(){
        return $this->belongsTo(Societe::class);
    }

    public function voyages(){
        return $this->hasMany(Voyage::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'autocar_equipements', 'autocar_id', 'equipement_id');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'autocar_options', 'autocar_id', 'option_id');
    }
}
