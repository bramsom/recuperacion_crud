<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>EDICION DE DATOS DE LOS CLIENTES</title>
</head>
<body>
    <div class="container">
        <h1>EDICION DE DATOS</h1>

        <form action="{{ route('cliente.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                CODIGO:
                <br>
                <input type="string" name="code" value= "{{ $customer->code }}" placeholder="codigo del cliente">
            </label>
            <br>
            <label>
                TELEFONO:
                <br>
                <input type="integer" name="phone" value="{{ $customer->phone }}" placeholder="telefono del cliente">
            </label>
            <br>
            <label>
                NUMERO SOCIAL:
                <br>
                <input type="string" name="num_social" value="{{ $customer->num_social }}" placeholder="numero social del cliente">
            </label>
            <br>
            <label>
                DOMICILIO:
                <br>
                <input type="string" name="home" value="{{ $customer->home }}" placeholder="domicilio del cliente">
            </label>
            <br>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>