<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_structure extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate::class);
    }
}
