<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugaresturisticos extends Model
{
    public $table = "lugaresTuristicos";
    public $primaryKey = "idlugaresTuristicos";
    public $timestamps = "false";
    public $guarded = [];
}
