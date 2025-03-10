<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocarEquipement extends Model
{
    protected $guarded = ['id'];
    public function autocar()
    {
        return $this->belongsTo(Autocar::class);
    } 
    public function equipement()
    {
        return $this->belongsTo(Equipement::class);}
}
