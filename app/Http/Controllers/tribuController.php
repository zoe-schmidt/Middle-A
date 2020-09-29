<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\tribu;

class tribuController extends Controller
{
    public function listadoTribus(){
        $tribus=tribu::all();
  
        $vac=compact("tribus");
  
        return view("/tribus",$vac);
      }

      public function editarTribu($id){
        $tribus=tribu::find($id);

        $vac=compact("tribus");

        return view("/cargarFotosTribu",$vac);
      }

      public function cargarFotos(request $req,$id){
        
      
        $tribuvieja=request()->except('_token');
        
       
       /* $tribuActualizada= new tribu();


        $ruta=$req->file('foto1')->store("public");
        $nombrefoto1=basename($ruta);
        $ruta2=$req->file('foto2')->store("public");
        $nombrefoto2=basename($ruta2);
        $ruta3=$req->file('foto3')->store("public");
        $nombrefoto3=basename($ruta3);
        
      
        $tribuActualizada->foto1=$nombrefoto1;
        $tribuActualizada->foto2=$nombrefoto2;
        $tribuActualizada->foto3=$nombrefoto3;
      

        $tribuActualizada->save();
*/


        if($req->hasFile('foto1','foto2',"foto3")){

          $tribus=tribu::find($id);
          
          Storage::delete("/public" . $tribus->foto1);
          Storage::delete("/public" . $tribus->foto2);
          Storage::delete("/public" . $tribus->foto3);

          $tribuvieja["foto1"]=$req->file("foto1")->store("storage", "public");
          $tribuvieja["foto2"]=$req->file("foto2")->store("storage", "public");
          $tribuvieja["foto3"]=$req->file("foto3")->store("storage", "public");
        };


        $tribuEditada=tribu::where('id','=',$id)->update($tribuvieja);


        return redirect("/tribus");
  }

}  
