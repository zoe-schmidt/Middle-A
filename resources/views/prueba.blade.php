<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Información país</p>
    <ul>
      @foreach ($paises as $pais)
      <li>
        <h2>{{$pais->nombre}}</h2>
        </li>
        <li><p>{{$pais->descripcion}}</p></li>
    @endforeach
       </ul>
  </body>
</html>
