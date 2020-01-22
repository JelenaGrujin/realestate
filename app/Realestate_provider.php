<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_provider extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function provider(){
        return $this->belongsToMany(Provider::class);
    }
}
