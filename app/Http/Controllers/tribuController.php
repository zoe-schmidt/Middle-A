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
        
          $tribuVieja=request()->except("_token");


          if($req->hasFile("foto1","foto2","foto3")){

           $tribus=tribu::find($id);

           $imagen="/storage/".$tribus->foto1;
           $imagen2="/storage/".$tribus->foto2;
           $imagen3="/storage/".$tribus->foto3;


            $ruta=str_replace("\\", "/" ,public_path());
            $ruta2=str_replace("\\", "/",public_path());
            $ruta3=str_replace("\\", "/",public_path());

         

            if(file_exists($ruta.$imagen)){
           
            unlink($ruta.$imagen);
            unlink($ruta2.$imagen2);
            unlink($ruta3.$imagen3);

            $tribuVieja["foto1"]=$req->file("foto1")->store("uploads","public");
            $tribuVieja["foto2"]=$req->file("foto2")->store("uploads","public" );
            $tribuVieja["foto3"]=$req->file("foto3")->store("uploads","public");

            $tribuEditada=tribu::where('id','=',$id)->update($tribuVieja);

            return redirect("/tribus");
            }else{
             
            
            $tribuVieja["foto1"]=$req->file("foto1")->store("uploads","public");
            $tribuVieja["foto2"]=$req->file("foto2")->store("uploads","public" );
            $tribuVieja["foto3"]=$req->file("foto3")->store("uploads","public");

            $tribuEditada=tribu::where('id','=',$id)->update($tribuVieja);

            return redirect("/tribus");
          }

    }

  }

}  

