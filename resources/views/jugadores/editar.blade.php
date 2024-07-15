<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR DETALLES DE LOS JUGADORES</h1>

        <form action="{{ route('jugador.update', $player->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                codigo:
                <br>
                <input type="integer" name="code" value= "{{ $player->code }}" placeholder="codigo del jugador">
            </label>
            <br>
            <label>
                fecha de nacimiento del jugador:
                <br>
                <input type="date" name="birthdate" value="{{ $player->birthdate }}" placeholder="fecha de nacimiento del jugador">
            </label>
            <br>
            <label>
                nombre del jugador:
                <br>
                <input type="text" name="name" value="{{ $player->name }}" placeholder="nombre del jugador">
            </label>
            <br>
            <label>
                posicion del jugador:
                <br>
                <input type="text" name="position" value="{{ $player->position }}" placeholder="posicion del jugador">
                
            </label>
            <br>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>