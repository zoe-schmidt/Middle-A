<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pais;

class paisesController extends Controller
{
    public function listadoPaises(){
      $paises=Pais::all();

      dd($paises);

      $vac=compact($paises);

      return view('/prueba',$vac);
    }

    public function pais(){
      $paises=Pais::all();
      for ($i=0; $i < count($paises) ; $i++){
        foreach ($paises as $pais) {
          return $pais= $pais->nombre;
          $vac=compact($pais);
          }
      };
        return view('/prueba',$vac);
}
}
