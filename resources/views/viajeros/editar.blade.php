<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>EDICION DE DATOS DE LOS VIAJEROS</title>
</head>
<body>
    <div class="container">
        <h1>EDICION DE DATOS</h1>

        <form action="{{ route('viajero.update', $taveler->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                DNI:
                <br>
                <input type="integer" name="DNI" value= "{{ $taveler->DNI }}" placeholder="DNI del viajero">
            </label>
            <br>    
            <label>
                NOMBRE:
                <br>
                <input type="string" name="name" value="{{ $taveler->name }}" placeholder="nombre del viajero">
            </label>
            <br>
            <label>
                DIRECCION DEL VIAJERO:
                <br>
                <input type="string" name="direction" value="{{ $taveler->direction }}" placeholder="direccion del viajero">
            </label>
            <br>
            <label>
                TELEFONO DEL VIAJERO:
                <br>
                <input type="integer" name="phone" value="{{ $taveler->phone }}" placeholder="telefono del viajero">
                
            </label>
            <br>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>