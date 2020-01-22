<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_bathroom extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function bathroom(){
        return $this->belongsToMany(Bathroom::class);
    }
}
