<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>EDICION DE DATOS DE LOS PRESIDENTES</title>
</head>
<body>
    <div class="container">
        <h1>EDICION DE DATOS</h1>

        <form action="{{ route('colaborador.update', $president->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                DNI:
                <br>
                <input type="text" name="DNI" value= "{{ $president->DNI }}" placeholder="DNI del presidente">
            </label>
            <br>
            <label>
                NOMBRE:
                <br>
                <input type="text" name="name" value="{{ $president->name }}" placeholder="nombre del presidente">
            </label>
            <br>
            <label>
                APELLIDO:
                <br>
                <input type="text" name="last_name" value="{{ $president->last_name }}" placeholder="apellido del libro">
            </label>
            <br>
            <label>
                FECHA DE NACIMIENTO:
                <br>
                <input type="date" name="birth_date" value="{{ $president->birth_date }}" placeholder="fecha de nacimiento">
                
            </label>
            <br>
            <label>
                AÑO:
                <br>
                <input type="integer" name="year" value="{{ $president->year }}" placeholder="año ">
                
            </label>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>