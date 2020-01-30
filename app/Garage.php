<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_garage::class);
    }
}
