<body>
    <form action="/cargarIconos/{{$iconos->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre"><h3>Nombre de los iconos</h3></label>
        
        <p>{{$iconos->nombre}}</p>

        <label for="icono1">icono N° 1</label>
        <input type="file" name="icono1" id="icono1">
        <br>
        <label for="icono2">icono N° 2</label>
        <input type="file" name="icono2" id="icono2">
        <br>
        <label for="icono3">icono N° 3</label>
        <input type="file" name="icono3" id="icono3">
        <br>
        <label for="icono4">icono N° 4</label>
        <input type="file" name="icono4" id="icono4">
        <br>
        <label for="icono5">icono N° 5</label>
        <input type="file" name="icono5" id="icono5">
        <br>
        <label for="icono6">icono N° 6</label>
        <input type="file" name="icono6" id="icono6">
        <br>
        <label for="icono7">icono N° 7</label>
        <input type="file" name="icono7" id="icono7">
        <br>
        <label for="icono8">icono N° 8</label>
        <input type="file" name="icono8" id="icono8">
        <br>
        <label for="icono9">icono N° 9</label>
        <input type="file" name="icono9" id="icono9">
        <br>
        <label for="icono10">icono N° 10</label>
        <input type="file" name="icono10" id="icono10">

        <input type="submit" value="cargar fotos">
        
    </form>
</body>