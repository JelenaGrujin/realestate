<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_district extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function district(){
        return $this->belongsToMany(District::class);
    }
}
