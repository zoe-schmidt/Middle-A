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

          $festivales=festivales::find($id);
          
          Storage::delete("/public" . $festivales->foto1);
          Storage::delete("/public" . $festivales->foto2);
          Storage::delete("/public" . $festivales->foto3);

          $festivaViejo["foto1"]=$req->file("foto1")->store("storage", "public");
          $festivaViejo["foto2"]=$req->file("foto2")->store("storage", "public");
          $festivaViejo["foto3"]=$req->file("foto3")->store("storage", "public");
        } else{

              $festivalNuevo= new tribu();


            $ruta=$req->file('foto1')->store("public");
            $nombrefoto1=basename($ruta);
            $ruta2=$req->file('foto2')->store("public");
            $nombrefoto2=basename($ruta2);
            $ruta3=$req->file('foto3')->store("public");
            $nombrefoto3=basename($ruta3);
            
        
            $festivalNuevo->foto1=$nombrefoto1;
            $festivalNuevo->foto2=$nombrefoto2;
            $festivalNuevo->foto3=$nombrefoto3;
        

            $festivalNuevo->save();

        }


        $festivalEditado=festivales::where('id','=',$id)->update($festivalViejo);


        return redirect("/festivales");
  }
}
