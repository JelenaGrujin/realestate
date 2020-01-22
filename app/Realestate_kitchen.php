<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_kitchen extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function kitchen(){
        return $this->belongsToMany(Kitchen::class);
    }
}
