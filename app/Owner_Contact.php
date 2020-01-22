<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner_Contact extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
