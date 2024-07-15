<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>REGISTRAR CLIENTES</h1>

<form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
   CODIGO:
    <br>
    <input type="string" name="code">
</label>
<br>
<label>
    TELEFONO:
    <br>
    <input type="integer" name="phone">
</label>
<br>
<label>
    NUMERO SOCIAL:
     <br>
     <input type="string" name="num_social">
 </label>
 <br>
 <label>
   DOMICILIO:
     <br>
     <input type="string" name="home">
 </label>
 <br>

<button type="submit">Enviar Formulario</button>
</form>
<br>
<form action="{{route('cliente.index')}}">
    <button type="submit" class="view-button">ver registros de los clientes</button>
</form>
</body>
</html>