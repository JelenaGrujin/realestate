<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Options extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate::class);
    }
}
