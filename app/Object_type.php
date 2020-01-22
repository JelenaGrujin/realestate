<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object_type extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_object_type::class);
    }
}
