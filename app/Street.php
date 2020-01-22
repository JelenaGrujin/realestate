<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_street::class);
    }
}
