<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';
    protected $fillable = ['name'];

    public function realestate(){
        return $this->hasMany(Realestate_equipment::class);
    }
}
