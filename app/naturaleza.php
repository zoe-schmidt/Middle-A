<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class naturaleza extends Model
{
    public $table="naturaleza";
    public $guarded = [];

        public function pais(){
            return $this->belongsTo("App\pais","paises_id");
    }

}