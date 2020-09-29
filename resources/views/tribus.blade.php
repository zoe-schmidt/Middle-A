<body>

    <h3>Prueba de la Tabla Tribus</h3>

    <ul>
        @foreach ($tribus as $tribu)

        <li>
             <h2> Nombre</h2>
            <p> {{$tribu->nombre}}</P>
        </li>
        <li>
            <h2>Descripción</h2>
            <p>{{$tribu->descripcion}}</p>
        </li>

        <li><img src="/storage/{{$tribu->foto1}}" alt=""></li>
        <li><img src="/storage/{{$tribu->foto2}}" alt=""></li>
        <li><img src="/storage/{{$tribu->foto3}}" alt=""></li>

        <button><a href="/cargarFotosTribu/{{$tribu->id}}">cargar Fotos</a></button>
            
        @endforeach

       
    </ul>
</body>