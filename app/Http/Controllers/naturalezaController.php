<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\naturaleza;

class naturalezaController extends Controller
{
    public function listadoNaturaleza(){
        $naturaleza=naturaleza::all();
        $vac=compact("naturaleza");

        return view("/naturaleza",$vac);
    }

    public function editarNaturaleza($id){

        $naturalezas=naturaleza::find($id);

        $vac=compact("naturalezas");

        return view("/cargarFotosNaturaleza",$vac);
      }

      public function cargarFotosNaturaleza(request $req,$id){
        
      
        $naturalezaVieja=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3","foto4")){
          
          $naturaleza=naturaleza::find($id);

          $imagen="/storage/".$naturaleza->foto1;
          $imagen2="/storage/".$naturaleza->foto2;
          $imagen3="/storage/".$naturaleza->foto3;
         

          $ruta=str_replace("\\", "/" ,public_path());
          $ruta2=str_replace("\\", "/",public_path());
          $ruta3=str_replace("\\", "/",public_path());

         

           if(file_exists($ruta.$imagen)){
      
             unlink($ruta.$imagen);
             unlink($ruta2.$imagen2);
             unlink($ruta3.$imagen3);
           
             $naturalezaVieja["foto1"]=$req->file("foto1")->store("uploads","public");
             $naturalezaVieja["foto2"]=$req->file("foto2")->store("uploads","public" );
             $naturalezaVieja["foto3"]=$req->file("foto3")->store("uploads","public");

             $naturalezaEditada=naturaleza::where('id','=',$id)->update($naturalezaVieja);

            return redirect("/naturaleza");
              }else{
                    $naturalezaVieja["foto1"]=$req->file("foto1")->store("uploads","public");
                    $naturalezaVieja["foto2"]=$req->file("foto2")->store("uploads","public" );
                    $naturalezaVieja["foto3"]=$req->file("foto3")->store("uploads","public");

                    $naturalezaeditada=naturaleza::where('id','=',$id)->update($naturalezaVieja);

                  return redirect("/naturaleza");
                }
      }
    }
      
}