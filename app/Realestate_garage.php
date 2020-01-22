<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_garage extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function garage(){
        return $this->belongsToMany(Garage::class);
    }
}
