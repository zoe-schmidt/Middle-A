<body>

    <h2>Prueba de la Tabla de Naturaleza</h3>
    <ul>
        @foreach ($naturaleza as $natural)

        <li>
             <h3>Nombre</h2>
            <p>{{$natural->Nombre}}</P>
        </li>

        <li><img src="/storage/{{$natural->foto1}}" alt=""></li>
        <li><img src="/storage/{{$natural->foto2}}" alt=""></li>
        <li><img src="/storage/{{$natural->foto3}}" alt=""></li>

        <button><a href="/cargarFotosNaturaleza/{{$natural->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>