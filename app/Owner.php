<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function realestate(){
        return $this->hasMany(Realestate::class);
    }

    public function ownerContact(){
        return $this->hasMany(Owner_Contact::class);
    }

    public function agent(){
        return $this->belongsTo(User::class);
    }
}
