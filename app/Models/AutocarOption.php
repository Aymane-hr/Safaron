<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocarOption extends Model
{
    //use HasFactory;
    protected $guarded = ['id'];
    public function autocar()
    {
        return $this->belongsTo(Autocar::class);
    }
    public function option()
    {
        return $this->belongsTo(Option::class);}
}
