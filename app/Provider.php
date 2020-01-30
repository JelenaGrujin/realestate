<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_provider::class);
    }
}
