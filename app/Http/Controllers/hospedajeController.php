<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hospedaje;

class hospedajeController extends Controller
{
    public function listadoHospedajes(){
        $hospedajes=hospedaje::all();
            $vac=compact("hospedajes");

            return view ("/hospedaje",$vac);
        
    }
}
