<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospedaje extends Model
{
    public $table = "hospedaje";
    public $primaryKey = "idhospedaje";
    public $timestamps = false;
    public $guarded = [];
}
