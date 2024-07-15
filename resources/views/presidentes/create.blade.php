<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>REGISTRAR PRESIDENTE</h1>

<form action="{{route('presidente.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    DNI:
    <br>
    <input type="text" name="DNI">
</label>
<br>
<label>
    Nombre del presidente:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Apellido del presidente:
    <br>
    <input type="text" name="last_name">
</label>
<br>
<label>
    Fecha de nacimiento:
    <br>
    <input type="date" name="birth_date">
</label>
<br>
<label>
    Año:
    <br>
    <input type="integer" name="year">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
<br>
<form action="{{route('presidente.index')}}">
    <button type="submit" class="view-button">ver registros de jugadores</button>
</form>
</body>
</html>