<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\highlight;

class highlightController extends Controller
{
    public function listado(){
        $iconos=highlight::all();

        $vac=compact("iconos");

        return view("/highlights",$vac);
    }

    public function editariconos($id){

        $iconos=highlight::find($id);

        $vac=compact("iconos");

        return view("/cargarIconos",$vac);
      }

      public function cargarIconos(request $req,$id){
        
      
        $iconosViejo=request()->except('_token');


        if($req->hasFile('icono1','icono2',"icono3","icono4" ,"icono5" ,"icono6" ,"icono7","icono8","icono9","icono10")){

          $iconos=highlight::find($id);
          
          Storage::delete("storage/" . $iconos->icono1);
          Storage::delete("storage/" . $iconos->icono2);
          Storage::delete("storage/" . $iconos->icono3);
          Storage::delete("storage/" . $iconos->icono4);
          Storage::delete("storage/" . $iconos->icono5);
          Storage::delete("storage/" . $iconos->icono6);
          Storage::delete("storage/" . $iconos->icono7);
          Storage::delete("storage/" . $iconos->icono8);
          Storage::delete("storage/" . $iconos->icono9);
          Storage::delete("storage/" . $iconos->icono10);


          $iconosViejos["icono1"]=$req->file("icono1")->store("storage","public");
          $iconosViejos["icono2"]=$req->file("icono2")->store("storage","public");
          $iconosViejos["icono3"]=$req->file("icono3")->store("storage","public");
          $iconosViejos["icono4"]=$req->file("icono4")->store("storage","public");
          $iconosViejos["icono5"]=$req->file("icono5")->store("storage","public");
          $iconosViejos["icono5"]=$req->file("icono5")->store("storage","public");
          $iconosViejos["icono7"]=$req->file("icono7")->store("storage","public");
          $iconosViejos["icono8"]=$req->file("icono8")->store("storage","public");
          $iconosViejos["icono9"]=$req->file("icono9")->store("storage","public");
          $iconosViejos["icono10"]=$req->file("icono10")->store("storage","public");
        
        };


        $iconosEditados=highlight::where('id','=',$id)->update($iconosViejos);

          

        return redirect("/highlights");
  }
}
