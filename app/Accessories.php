<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_accessories::class);
    }
}
