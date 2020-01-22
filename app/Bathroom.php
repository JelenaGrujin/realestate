<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bathroom extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_bathroom::class);
    }
}
