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

          $imagen="/storage/".$festivales->foto1;
          $imagen2="/storage/".$festivales->foto2;
          $imagen3="/storage/".$festivales->foto3;
         

          $ruta=str_replace("\\", "/" ,public_path());
          $ruta2=str_replace("\\", "/",public_path());
          $ruta3=str_replace("\\", "/",public_path());


           if(file_exists($ruta.$imagen)){
      
             unlink($ruta.$imagen);
             unlink($ruta2.$imagen2);
             unlink($ruta3.$imagen3);
           
             $festivalesViejos["foto1"]=$req->file("foto1")->store("uploads","public");
             $festivalesViejos["foto2"]=$req->file("foto2")->store("uploads","public" );
             $festivalesViejos["foto3"]=$req->file("foto3")->store("uploads","public");

             $festivalesEditados=festivales::where('id','=',$id)->update($festivalesViejos);

            return redirect("/festivales");
              }else{
                    $festivalesViejos["foto1"]=$req->file("foto1")->store("uploads","public");
                    $festivalesViejos["foto2"]=$req->file("foto2")->store("uploads","public" );
                    $festivalesViejos["foto3"]=$req->file("foto3")->store("uploads","public");

                    $festivalEditado=festivales::where('id','=',$id)->update($festivalesViejos);

                    return redirect("/festivales");
                }
          }
        }
  }

