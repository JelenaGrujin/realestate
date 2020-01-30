<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_city::class);
    }
}
