<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heating extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_heating::class);
    }
}
