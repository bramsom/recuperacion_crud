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
        <h1>EDITAR DETALLES DE LOS ORIGENES</h1>

        <form action="{{ route('origen.update', $origin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                codigo de origen:
                <br>
                <input type="string" name="code_origin" value= "{{ $origin->code_origin }}" placeholder="codigo del origen">
            </label>
            <br>
            <label>
                nombre del origen:
                <br>
                <input type="string" name="name_origin" value="{{ $origin->name_origin }}" placeholder="nombre del origen">
            </label>
            <br>
            <label>
                otros datos del origen:
                <br>
                <input type="string" name="other_dates_o" value="{{ $origin->other_dates_o }}" placeholder="otros datos del origen">
            </label>
            <br>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>