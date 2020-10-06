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
     
          $tribus=tribu::find($id);

         
          $imagen="/storage/" . $tribus->foto1;
          $imagen2= "/storage/".$tribus->foto2;
          $imagen3= "/storage/". $tribus->foto3;

          $ruta=str_replace("\\", '/' ,public_path());


          if(file_exists($ruta. $imagen)){

            
            unlink($ruta.$imagen);
            unlink($ruta.$imagen2);
            unlink($ruta.$imagen3);
            
            $tribuvieja["foto1"]=$req->file("foto1")->store("storage","public");
            $tribuvieja["foto2"]=$req->file("foto2")->store("storage","public");
            $tribuvieja["foto3"]=$req->file("foto3")->store("storage","public");

            $tribuEditada=tribu::where('id','=',$id)->update($tribuvieja);

            return redirect("/tribus");

          }else{
            
            $tribuvieja["foto1"]=$req->file("foto1")->store("storage","public");
            $tribuvieja["foto2"]=$req->file("foto2")->store("storage","public");
            $tribuvieja["foto3"]=$req->file("foto3")->store("storage","public");

            $tribuEditada=tribu::where('id','=',$id)->update($tribuvieja);

            return redirect("/tribus");
           
          };

    }

}  

