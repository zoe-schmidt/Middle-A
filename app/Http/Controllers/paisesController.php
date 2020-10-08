<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pais;

class paisesController extends Controller
{
    public function listadoPaises(){
      $paises=Pais::all();

      $vac=compact("paises");

      return view("/paises",$vac);
    }

}
