<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_equipment extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function equipments(){
        return $this->belongsToMany(Equipement::class);
    }
}
