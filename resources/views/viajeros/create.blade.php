<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>REGISTRAR VIAJERO</h1>

<form action="{{route('viajero.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    DNI:
    <br>
    <input type="integer" name="DNI">
</label>
<br>
<label>
    Nombre del viajero:
    <br>
    <input type="string" name="name">
</label>
<br>
<label>
    Direccion del viajero:
    <br>
    <input type="string" name="direction">
</label>
<br>
<label>
    telefono:
    <br>
    <input type="integer" name="phone">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
<br>
<form action="{{route('viajero.index')}}">
    <button type="submit" class="view-button">ver registros de viajeros</button>
</form>
</body>
</html>