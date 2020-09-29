<body>
    <form action="/cargarFotosTribu/{{$tribus->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre"><h3>Nombre de la Tribu</h3></label>
        
        <p>{{$tribus->nombre}}</p>

        <label for="foto1">foto N° 1</label>
        <input type="file" name="foto1" id="foto1">
        <br>
        <label for="foto2">foto N° 2</label>
        <input type="file" name="foto2" id="foto2">
        <br>
        <label for="foto3">foto N° 3</label>
        <input type="file" name="foto3" id="foto3">

        <input type="submit" value="cargar fotos">
        
    </form>
</body>