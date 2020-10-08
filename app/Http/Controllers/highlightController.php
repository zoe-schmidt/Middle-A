<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\highlight;

class highlightController extends Controller
{
    public function listado(){
        $iconos=highlight::all();

        $vac=compact("iconos");

        return view("/highlights",$vac);
    }

    public function editariconos($id){

        $iconos=highlight::find($id);

        $vac=compact("iconos");

        return view("/cargarIconos",$vac);
      }

      public function cargarIconos(request $req,$id){
        
      
        $iconosViejo=request()->except('_token');


        if($req->hasFile('icono1','icono2',"icono3","icono4" ,"icono5" ,"icono6" ,"icono7","icono8","icono9","icono10")){

          $iconos=highlight::find($id);
          
          $imagen="/storage/".$iconos->icono1;
          $imagen2="/storage/".$iconos->icono2;
          $imagen3="/storage/".$iconos->icono3;
          $imagen4="/storage/".$iconos->icono4;
          $imagen5="/storage/".$iconos->icono5;
          $imagen6="/storage/".$iconos->icono6;
          $imagen7="/storage/".$iconos->icono7;
          $imagen8="/storage/".$iconos->icono8;
          $imagen9="/storage/".$iconos->icono9;
          $imagen10="/storage/".$iconos->icono10;

         

          $ruta=str_replace("\\", "/" ,public_path());
          $ruta2=str_replace("\\", "/",public_path());
          $ruta3=str_replace("\\", "/",public_path());
          $ruta4=str_replace("\\", "/",public_path());
          $ruta5=str_replace("\\", "/",public_path());
          $ruta6=str_replace("\\", "/",public_path());
          $ruta7=str_replace("\\", "/",public_path());
          $ruta8=str_replace("\\", "/",public_path());
          $ruta9=str_replace("\\", "/",public_path());
          $ruta10=str_replace("\\","/",public_path());

         

           if(file_exists($ruta.$imagen)){
      
             unlink($ruta.$imagen);
             unlink($ruta2.$imagen2);
             unlink($ruta3.$imagen3);
             unlink($ruta4.$imagen4);
             unlink($ruta5.$imagen5);
             unlink($ruta6.$imagen6);
             unlink($ruta7.$imagen7);
             unlink($ruta8.$imagen8);
             unlink($ruta9.$imagen9);
             unlink($ruta10.$imagen10);
           
             $iconoViejo["icono1"]=$req->file("icono1")->store("uploads","public");
             $iconoViejo["icono2"]=$req->file("icono2")->store("uploads","public" );
             $iconoViejo["icono3"]=$req->file("icono3")->store("uploads","public");
             $iconoViejo["icono4"]=$req->file("icono4")->store("uploads","public");
             $iconoViejo["icono5"]=$req->file("icono5")->store("uploads","public");
             $iconoViejo["icono6"]=$req->file("icono6")->store("uploads","public");
             $iconoViejo["icono7"]=$req->file("icono7")->store("uploads","public");
             $iconoViejo["icono8"]=$req->file("icono8")->store("uploads","public");
             $iconoViejo["icono9"]=$req->file("icono9")->store("uploads","public");
             $iconoViejo["icono10"]=$req->file("icono10")->store("uploads","public");

             $iconoEditado=highlight::where('id','=',$id)->update($lugarViejo);

            return redirect("/highlights");
              }else{
                    
             $iconoViejo["icono1"]=$req->file("icono1")->store("uploads","public");
             $iconoViejo["icono2"]=$req->file("icono2")->store("uploads","public" );
             $iconoViejo["icono3"]=$req->file("icono3")->store("uploads","public");
             $iconoViejo["icono4"]=$req->file("icono4")->store("uploads","public");
             $iconoViejo["icono5"]=$req->file("icono5")->store("uploads","public");
             $iconoViejo["icono6"]=$req->file("icono6")->store("uploads","public");
             $iconoViejo["icono7"]=$req->file("icono7")->store("uploads","public");
             $iconoViejo["icono8"]=$req->file("icono8")->store("uploads","public");
             $iconoViejo["icono9"]=$req->file("icono9")->store("uploads","public");
             $iconoViejo["icono10"]=$req->file("icono10")->store("uploads","public");
                    
             $iconoEditado=highlight::where('id','=',$id)->update($iconoViejo);

                  return redirect("/highlights");
                }
        }
    
        
  }
}
