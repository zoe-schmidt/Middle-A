<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class festivales extends Model
{
    public $table = "festivales";
    public $timestamps = false;
    public $guarded = [];

    public function pais(){
        return $this->belongsTo("App\Pais","paises_id");
    }
}
