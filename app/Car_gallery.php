<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_gallery extends Model
{
    protected $guarded=[];

    public function carModel(){
        return $this->belongsTo(Car_model::class);
    }
    public function carSpe(){
        return $this->hasOne(Car_specification::class);
    }
}
