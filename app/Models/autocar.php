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
}
