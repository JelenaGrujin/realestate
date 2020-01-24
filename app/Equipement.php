<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = 'name';

    public function realestate(){
        return $this->hasMany(Realestate_equipment::class);
    }
}
