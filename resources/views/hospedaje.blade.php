<body>

    <h3>Prueba de la Tabla Hospedaje</h3>
    <ul>
        @foreach ($hospedajes as $hospedaje)

        <li>
             <h2>Nombre</h2>
            <p>{{$hospedaje->nombre}}</P>
        </li>
            
        @endforeach
    </ul>
</body>