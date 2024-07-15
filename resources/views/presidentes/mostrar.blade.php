<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETALLES DE LOS PRESIDENTES</title>
    </head>
<body>
    <div class="container">
        <h1>DATOS DEL PRESIDENTE</h1>
        <div>
            <p>ID: {{$president->id}}</p>
            <p>DNI DEL PRESIDENTE {{$president->DNI}}</p>
            <p>NOMBRE DEL PRESIDENTE: {{$president->name}}</p>
            <p>APELLIDO DEL PRESIDENTE: {{$president->last_name}}</p>
            <p>FECHA DE NACIMIENTO DEL PRESIDENTE: {{$president->birth_date}}</p>
            <p>AÑO DEL PRESIDENTE: {{$president->year}}</p>
        </div>
    </div>
</body>
</html>