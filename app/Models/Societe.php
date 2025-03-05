<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function autocars(){
        return $this->hasMany(AutoCar::class);

    }
}
