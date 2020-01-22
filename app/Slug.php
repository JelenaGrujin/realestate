<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_slug::class);
    }
}
