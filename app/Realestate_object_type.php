<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_object_type extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function objectType(){
        return $this->belongsToMany(Object_type::class);
    }
}
