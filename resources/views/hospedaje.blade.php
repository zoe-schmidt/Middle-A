<body>

    <h3>Prueba de la Tabla Hospedaje</h3>
    <ul>
        @foreach ($hospedajes as $hospedaje)

        <li>
             <h2>Nombre</h2>
            <p>{{$hospedaje->nombre}}</P>
        </li>

        <li><img src="/storage/{{$hospedaje->foto1}}" alt=""></li>
        <li><img src="/storage/{{$hospedaje->foto2}}" alt=""></li>
        <li><img src="/storage/{{$hospedaje->foto3}}" alt=""></li>
            
        <button><a href="/cargarFotosHospedajes/{{$hospedaje->id}}">cargar Fotos</a></button>
        @endforeach
    </ul>
</body>