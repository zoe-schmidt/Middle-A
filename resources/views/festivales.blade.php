<body>

    <h3>Prueba de la Tabla Festivales</h3>
    <ul>
        @foreach ($festivales as $festival)

        <li>
             <h2> Nombre</h2>
            <p> {{$festival->nombre}}</P>
        </li>
        <li>
            <h2>Descripción</h2>
            <p>{{$festival->descripcion}}</p>
        </li>
            
        <button><a href="/cargarFotosFestivales/{{$festival->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>