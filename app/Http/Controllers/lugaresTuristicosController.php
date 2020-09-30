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
          
          Storage::delete("storage/" . $lugares->foto1);
          Storage::delete("storage/" . $lugares->foto2);
          Storage::delete("storage/" . $lugares->foto3);
          Storage::delete("storage/" . $lugares->foto4);

          $lugarViejo["foto1"]=$req->file("foto1")->store("storage","public");
          $lugarViejo["foto2"]=$req->file("foto2")->store("storage","public");
          $lugarViejo["foto3"]=$req->file("foto3")->store("storage","public");
          $lugarViejo["foto4"]=$req->file("foto4")->store("storage","public");
        };


        $lugarEditado=lugaresturisticos::where('id','=',$id)->update($lugarViejo);

          

        return redirect("/lugaresTuristicos");
  }
}
