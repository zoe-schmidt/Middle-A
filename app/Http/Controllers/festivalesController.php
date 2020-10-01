<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\festivales;

class festivalesController extends Controller
{
    public function listadoFestivales(){
        $festivales=festivales::all();
        
            $vac=compact("festivales");
  
            return view ("/Festivales",$vac);
        
    }

    public function editarFestivales($id){

        $festival=festivales::find($id);

        $vac=compact("festival");

        return view("/cargarFotosfestivales",$vac);
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
