<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_terrace extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function terrace(){
        return $this->belongsToMany(Terrace::class);
    }
}
