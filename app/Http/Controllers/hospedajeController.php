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
          
          Storage::delete("/storage" . $hospedajes->foto1);
          Storage::delete("/storage" . $hospedajes->foto2);
          Storage::delete("/storage" . $hospedajes->foto3);

          $hospedajeViejo["foto1"]=$req->file("foto1")->store("storage", "public");
          $hospedajeViejo["foto2"]=$req->file("foto2")->store("storage", "public");
          $hospedajeViejo["foto3"]=$req->file("foto3")->store("storage", "public");
        };


        $hospedajeEditado=hospedaje::where('id','=',$id)->update($hospedajeViejo);

          

        return redirect("/hospedaje");
  }
}


