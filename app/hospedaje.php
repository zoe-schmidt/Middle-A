<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospedaje extends Model
{
    public $table = "hospedaje";
    public $timestamps = false;
    public $guarded = [];

    public function pais(){
        return $this->belongsTo("App\Pais","paises_id");
}

}

