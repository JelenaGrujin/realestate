<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bathroom extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_bathroom::class);
    }
}
