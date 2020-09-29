<body>

    <h2>Prueba de la Tabla de Lugares Turisticos</h3>
    <ul>
        @foreach ($lugares as $lugar)

        <li>
             <h3>Nombre</h2>
            <p>{{$lugar->Nombre}}</P>
        </li>
            
        @endforeach
    </ul>
</body>