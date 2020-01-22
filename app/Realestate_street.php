<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_street extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function street(){
        return $this->belongsToMany(Street::class);
    }
}
