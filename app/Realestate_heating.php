<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_heating extends Model
{
    public function realestte(){
        return $this->belongsToMany(Realestate::class);
    }

    public function heating(){
        return $this->belongsToMany(Heating::class);
    }
}
