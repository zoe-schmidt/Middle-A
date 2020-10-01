<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>Presentacion Backend la base de Datos para Middle Africa</h1>
    <ul>
      @foreach ($paises as $pais)
      <li>
        <h2>{{$pais->nombre}}</h2>
        </li>
        <li><p>{{$pais->descripcion}}</p></li>
       

        <h2>fotos de la tabla de Festivales</h2>
        
        <ul>
          @foreach ($pais->festival as $festivales)

            <li><img src="/storage/{{$festivales->foto1}}" alt="imagen de festival"></li>
            <li><p>{{$festivales->descripcion_foto1}}</p></li>
            <li><img src="/storage/{{$festivales->foto2}}" alt="imagen de festival"></li>
            <li><p>{{$festivales->descripcion_foto2}}</p></li>
            <li><img src="/storage/{{$festivales->foto3}}" alt="imagen de festival"></li>
            <li><p>{{$festivales->descripcion_foto3}}</p></li>
          
            @endforeach

            </ul>

      <h2>fotos de la tabla de hospedaje</h2>
        
        <ul>

          @foreach ($pais->hospedajes as $hospedaje)

            <li><img src="/storage/{{$hospedaje->foto1}}" alt="imagen de festival"></li>
            <li><p>{{$hospedaje->descripcion_foto2}}</p></li>
            <li><img src="/storage/{{$hospedaje->foto2}}" alt="imagen de festival"></li>
            <li><p>{{$hospedaje->descripcion_foto2}}</p></li>
            <li><img src="/storage/{{$hospedaje->foto3}}" alt="imagen de festival"></li>
            <li><p>{{$hospedaje->descripcion_foto3}}</p></li>

          
          @endforeach

          </ul>

      <h2>fotos de la tabla de Lugares Turisticos</h2>
        <ul>
            @foreach ($pais->Lugarturistico as $lugares)

              <li><img src="/storage/{{$lugares->foto1}}" alt="imagen de festival"></li>
              <li><p>{{$lugares->descripcion_foto1}}</p></li>
              <li><img src="/storage/{{$lugares->foto2}}" alt="imagen de festival"></li>
              <li><p>{{$lugares->descripcion_foto2}}</p></li>
              <li><img src="/storage/{{$lugares->foto3}}" alt="imagen de festival"></li>
              <li><p>{{$lugares->descripcion_foto3}}</p></li>

            @endforeach

            </ul>

      <h2>fotos de la tabla de Tribus</h2>
        
        <ul>
            @foreach ($pais->tribus as $tribu)

            <li><img src="/storage/{{$tribu->foto1}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto1}}</p></li>
            <li><img src="/storage/{{$tribu->foto2}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto2}}</p></li>
            <li><img src="/storage/{{$tribu->foto3}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto3}}</p></li>
            
            @endforeach

        </ul>
      

        
      <h2>fotos de la tabla de Naturalezas</h2>
        
      <ul>
         @foreach ($pais->naturalezas as $naturaleza)

            <li><img src="/storage/{{$naturaleza->foto1}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto1}}</p></li>
            <li><img src="/storage/{{$naturaleza->foto2}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto2}}</p></li>
            <li><img src="/storage/{{$naturaleza->foto3}}" alt="imagen de festival"></li>
            <li><p>{{$tribu->descripcion_foto3}}</p></li>
          
            @endforeach

      </ul>

      <h2>fotos de la tabla de Higligts</h2>
        
      <ul>
          @foreach ($pais->iconos as $icono)
            <li><p>{{$icono->titulo}}</p></li>
            <li><img src="/storage/{{$icono->icono1}}" alt="imagen de festival"></li>
            <li><p>{{$icono->titulo}}</p></li>
            <li><img src="/storage/{{$icono->icono2}}" alt="imagen de festival"></li>
            <li><p>{{$icono->titulo}}</p></li>
            <li><img src="/storage/{{$icono->icono3}}" alt="imagen de festival"></li>
           @endforeach

      </ul>
    
    @endforeach
       </ul>
       
  </body>
</html>


