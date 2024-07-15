<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>REGISTRAR colaboradores</h1>

<form action="{{route('colaborador.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    NIF:
    <br>
    <input type="integer" name="nif">
</label>
<br>
<label>
    Nombre del colaborador:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>

<button type="submit">Enviar Formulario</button>
</form>
<br>
<form action="{{route('colaborador.index')}}">
    <button type="submit" class="view-button">ver registros de los colaboradores</button>
</form>
</body>
</html>