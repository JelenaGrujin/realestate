<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carpentry extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_carpentry::class);
    }
}
