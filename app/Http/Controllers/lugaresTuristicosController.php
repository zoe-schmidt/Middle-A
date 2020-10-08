<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\lugaresturisticos;

class lugaresTuristicosController extends Controller
{
    public function listadoLugaresTuristicos(){
        $lugares=lugaresturisticos::all();
            $vac=compact("lugares");

            return view ("/lugaresTuristicos",$vac);
        
    }

    public function editarLugaresTuristicos($id){

        $lugares=lugaresturisticos::find($id);

        $vac=compact("lugares");

        return view("/cargarFotosLugaresTuristicos",$vac);
      }

      public function cargarFotosLugaresTuristicos(request $req,$id){
        
      
        $festivalViejo=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3","foto4")){

          $lugares=lugaresturisticos::find($id);

          $imagen="/storage/".$lugares->foto1;
          $imagen2="/storage/".$lugares->foto2;
          $imagen3="/storage/".$lugares->foto3;
          $imagen4="/storage/".$lugares->foto4;
         

          $ruta=str_replace("\\", "/" ,public_path());
          $ruta2=str_replace("\\", "/",public_path());
          $ruta3=str_replace("\\", "/",public_path());
          $ruta4=str_replace("\\", "/",public_path());


           if(file_exists($ruta.$imagen)){
      
             unlink($ruta.$imagen);
             unlink($ruta2.$imagen2);
             unlink($ruta3.$imagen3);
             unlink($ruta4.$imagen4);
           
             $lugarViejo["foto1"]=$req->file("foto1")->store("uploads","public");
             $lugarViejo["foto2"]=$req->file("foto2")->store("uploads","public" );
             $lugarViejo["foto3"]=$req->file("foto3")->store("uploads","public");
             $lugarViejo["foto4"]=$req->file("foto4S")->store("uploads","public");

             $hlugarEditado=lugaresTuristicos::where('id','=',$id)->update($lugarViejo);

            return redirect("/lugaresTuristicos");
              }else{
                    $lugarViejo["foto1"]=$req->file("foto1")->store("uploads","public");
                    $lugarViejo["foto2"]=$req->file("foto2")->store("uploads","public" );
                    $lugarViejo["foto3"]=$req->file("foto3")->store("uploads","public");
                    $lugarViejo["foto4"]=$req->file("foto4")->store("uploads","public");

                    $lugarEditado=lugaresTuristicos::where('id','=',$id)->update($lugarViejo);

                  return redirect("/lugaresTuristicos");
                }
        }
      }

}