<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_status extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate::class);
    }
}
