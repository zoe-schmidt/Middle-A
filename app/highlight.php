<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class highlight extends Model
{
    public $table="highlight";
    public $guarded=[];

    public function pais(){
        return $this->belongsTo("App\Pais","paises_id");

    }
}
