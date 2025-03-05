<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;
class Voyage extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'villes_depart_id');
    }

    public function villeArrive()
    {
        return $this->belongsTo(Ville::class, 'villes_arrive_id');
    }

    public function autocar()
    {
        return $this->belongsTo(AutocarEquipement::class);
    }

    public function typeVoyage()
    {
        return $this->belongsTo(TypeVoyage::class);
    }
}

