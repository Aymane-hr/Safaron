<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['option']; // تغيير 'name' إلى 'option'


    public function autocars()
    {
        return $this->hasMany(Autocar::class);
    }
}
