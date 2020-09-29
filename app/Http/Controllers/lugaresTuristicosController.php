<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

      public function cargarFotosFestival(request $req,$id){
        
      
        $festivalViejo=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3")){

          $festivales=festivales::find($id);
          
          Storage::delete("/public" . $festivales->foto1);
          Storage::delete("/public" . $festivales->foto2);
          Storage::delete("/public" . $festivales->foto3);

          $festivalViejo["foto1"]=$req->file("foto1")->store("storage", "public");
          $festivalViejo["foto2"]=$req->file("foto2")->store("storage", "public");
          $festivalViejo["foto3"]=$req->file("foto3")->store("storage", "public");
        };


        $festivalEditado=festivales::where('id','=',$id)->update($festivalViejo);

          

        return redirect("/festivales");
  }
}
