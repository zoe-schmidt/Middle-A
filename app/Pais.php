<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public $table = "paises";
    public $timestamps = false;
    public $guarded = [];

    public function festival(){
        return $this->hasMany('App\festivales','paises_id');
    }

    public function hospedajes(){
        return $this->hasMany('App\hospedaje','paises_id');
    }

    public function lugarTuristico(){
        return $this->hasMany('App\hospedaje','paises_id');
    }

    public function tribus(){
        return $this->hasMany('App\tribu','paises_id');
    }

    public function naturalezas(){
        return $this->hasMany('App\naturaleza','paises_id');
    }

    public function iconos(){
        return $this->hasMany('App\highlight','paises_id');
    }
}


