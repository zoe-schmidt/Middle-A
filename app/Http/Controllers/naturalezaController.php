<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\naturaleza;

class naturalezaController extends Controller
{
    public function listadoNaturaleza(){
        $naturaleza=naturaleza::all();
        $vac=compact("naturaleza");

        return view("/naturaleza",$vac);
    }
}
