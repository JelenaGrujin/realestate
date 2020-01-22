<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    public static function find()
    {
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function realesateType(){
        return $this->belongsTo(Type::class);
    }

    public function status(){
        return $this->belongsTo(Business_status::class);
    }

    public function paymentOptions(){
        return $this->belongsTo(Payment_Options::class);
    }

    public function structure(){
        return $this->belongsTo(Realestate_structure::class);
    }

    public function city(){
        return $this->hasMany(Realestate_city::class);
    }

    public function district(){
        return $this->hasMany(Realestate_district::class);
    }

    public function slug(){
        return $this->hasMany(Realestate_slug::class);
    }

    public function street(){
        return $this->hasMany(Realestate_street::class);
    }

    public function objectType(){
        return $this->hasMany(Realestate_object_type::class);
    }

    public function equipment(){
        return $this->hasMany(Realestate_equipment::class);
    }

    public function heating(){
        return $this->hasMany(Realestate_heating::class);
    }

    public function carpentry(){
        return $this->hasMany(Realestate_carpentry::class);
    }

    public function kitchen(){
        return $this->hasMany(Realestate_kitchen::class);
    }

    public function bathroom(){
        return $this->hasMany(Realestate_bathroom::class);
    }

    public function accessories(){
        return $this->hasMany(Realestate_accessories::class);
    }

    public function garage(){
        return $this->hasMany(Realestate_garage::class);
    }

    public function provider(){
        return $this->hasMany(Realestate_provider::class);
    }

    public function terrace(){
        return $this->hasMany(Realestate_terrace::class);
    }
}
