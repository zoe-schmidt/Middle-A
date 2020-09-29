<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lugaresturisticos;

class lugaresTuristicosController extends Controller
{
    public function listadoLugaresTuristicos(){
        $lugares=lugaresturisticos::all();
            $vac=compact("lugares");

            return view ("/lugaresTuristicos",$vac);
        
    }
}
