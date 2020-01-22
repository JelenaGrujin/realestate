<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_kitchen::class);
    }
}
