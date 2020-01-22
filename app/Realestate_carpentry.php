<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_carpentry extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function carpentry(){
        return $this->belongsToMany(Heating::class);
    }
}
