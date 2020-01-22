<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_city extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function city(){
        return $this->belongsToMany(City::class);
    }
}
