<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate_slug extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public  function slug(){
        return $this->belongsToMany(Slug::class);
    }
}
