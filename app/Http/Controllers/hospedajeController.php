<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\hospedaje;

class hospedajeController extends Controller
{
    public function listadoHospedajes(){
        $hospedajes=hospedaje::all();
            $vac=compact("hospedajes");

            return view ("/hospedaje",$vac);
        
    }

    
    public function editarHospedajes($id){

        $hospedajes=hospedaje::find($id);

        $vac=compact("hospedajes");

        return view("/cargarFotosHospedajes",$vac);
      }


      public function cargarFotosHospedajes(request $req,$id){
        
      
        $hospedajeViejo=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3")){

          $hospedajes=hospedaje::find($id);

          $imagen="/storage/".$hospedajes->foto1;
          $imagen2="/storage/".$hospedajes->foto2;
          $imagen3="/storage/".$hospedajes->foto3;
         

          $ruta=str_replace("\\", "/" ,public_path());
          $ruta2=str_replace("\\", "/",public_path());
          $ruta3=str_replace("\\", "/",public_path());


           if(file_exists($ruta.$imagen)){
      
             unlink($ruta.$imagen);
             unlink($ruta2.$imagen2);
             unlink($ruta3.$imagen3);
           
             $hospedajeViejo["foto1"]=$req->file("foto1")->store("uploads","public");
             $hospedajeViejo["foto2"]=$req->file("foto2")->store("uploads","public" );
             $hospedajeViejo["foto3"]=$req->file("foto3")->store("uploads","public");

             $hospedajeEditado=hospedaje::where('id','=',$id)->update($hospedajeViejo);

            return redirect("/hospedaje");
              }else{
                    $hospedajeViejo["foto1"]=$req->file("foto1")->store("uploads","public");
                    $hospedajeViejo["foto2"]=$req->file("foto2")->store("uploads","public" );
                    $hospedajeViejo["foto3"]=$req->file("foto3")->store("uploads","public");

                    $hospedajeEditado=hospedaje::where('id','=',$id)->update($hospedajeViejo);

                  return redirect("/hospedaje");
                }
          }
      }

}


