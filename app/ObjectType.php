<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectType extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_object_type::class);
    }
}
