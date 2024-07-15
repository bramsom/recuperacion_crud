<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>EDICION DE DATOS DE LOS COLABORADORES</title>
</head>
<body>
    <div class="container">
        <h1>EDICION DE DATOS</h1>

        <form action="{{ route('colaborador.update', $collaborator->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                NIF:
                <br>
                <input type="integer" name="nif" value= "{{ $collaborator->nif }}" placeholder="nif del colaborador">
            </label>
            <br>
            <label>
                NOMBRE:
                <br>
                <input type="text" name="name" value="{{ $collaborator->name }}" placeholder="nombre del colaborador">
            </label>
            </label>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>