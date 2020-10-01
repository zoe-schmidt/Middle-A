<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tribu extends Model
{
    public $table = "tribu";
    public $timestamps = false;
    public $guarded = [];

    public function pais(){
        return $this->belongsTo("App\pais","paises_id");
}
}
