<body>

    <h3>Prueba de la Tabla Higlights</h3>
    <ul>
        @foreach ($iconos as $icono)

        <li>
             <h2> Titulo</h2>
            <p> {{$icono->nombre}}</P>
        </li>

        <li><img src="/storage/{{$icono->icono1}}" alt=""></li>
        <li><img src="/storage/{{$icono->icono2}}" alt=""></li>
        <li><img src="/storage/{{$icono->icono3}}" alt=""></li>
            
        <button><a href="/cargarIconos/{{$icono->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>