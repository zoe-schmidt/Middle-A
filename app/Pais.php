<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public $table = "paises";
    public $primaryKey = "idpaises";
    public $timestamps = false;
    public $guarded = [];
}
