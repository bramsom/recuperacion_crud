<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETALLES DE LOS CLIENTES</title>
    </head>
<body>
    <div class="container">
        <h1>DATOS DEL CLIENTE</h1>
        <div>
            <p>ID: {{$customer->id}}</p>
            <p>CODIGO DEL CLIENTE{{$customer->code}}</p>
            <p>TELEFONO DEL CLIENTE {{$customer->phone}}</p>
            <p>NUMERO SOCIAL DEL CLIENTE{{$customer->num_social}}</p>
            <p>DOMICILIO DEL CLIENTE: {{$customer->home}}</p>
        </div>
    </div>
</body>
</html>