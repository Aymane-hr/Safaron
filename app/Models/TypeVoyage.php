<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVoyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_voyage',  
    ];

    // Définir la relation avec le modèle Voyage
    public function voyages()
    {
        return $this->hasMany(Voyage::class);
    }
}
