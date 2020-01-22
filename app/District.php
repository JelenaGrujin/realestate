<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate_district::class);
    }
}
