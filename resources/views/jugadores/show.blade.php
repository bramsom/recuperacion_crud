<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>DETALLES DE LOS JUGADORES</h1>
        <div>
            <p>ID: {{$player->id}}</p>
            <p>CODIGO DEL JUGADOR: {{$player->code}}</p>
            <p>FECHA DE NACIMIENTO DEL JUGADOR: {{$player->birthdate}}</p>
            <p>NOMBRE DEL JUGADOR: {{$player->name}}</p>
            <p>POSICION DEL JUGADOR: {{$player->position}}</p>
        </div>
    </div>
</body>
</html>