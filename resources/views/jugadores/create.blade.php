<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>crear jugadores</h1>

    <form action="{{route('jugador.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            codigo:
            <br>
            <input type="integer" name="code">  
        </label>
        <br>
        <label>
            fehca nacimiento:
            <br>
            <input type="date" name="birthdate">
        </label>
        <br>
        <label>
            nombre del jugador:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            posicion del jugador:
            <br>
            <input type="text" name="position">
        </label>
        <br>
        <br>
        <button type="submit" class="submit-button">Enviar datos del jugador</button>
    </form>
        <br>
        <form action="{{route('jugador.index')}}">
            <button type="submit" class="view-button">ver registros de jugadores</button>
        </form>
</body>
</html>