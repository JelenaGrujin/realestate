<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\A;

class Realestate_accessories extends Model
{
    public function realestate(){
        return $this->belongsToMany(Realestate::class);
    }

    public function accessories(){
        return $this->belongsToMany(Accessories::class);
    }
}
