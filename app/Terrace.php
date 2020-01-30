<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrace extends Model
{
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_terrace::class);
    }
}
