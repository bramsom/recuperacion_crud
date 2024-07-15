<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETALLES DE LOS VIAJEROS</title>
    </head>
<body>
    <div class="container">
        <h1>DATOS DEL VIAJERO</h1>
        <div>
            <p>ID: {{$taveler->id}}</p>
            <p>DNI DEL VIAJERO {{$taveler->DNI}}</p>
            <p>NOMBRE DEL VIAJERO: {{$taveler->name}}</p>
            <p>DIRECCION DEL VIAJERO: {{$taveler->direction}}</p>
            <p>TELEFONO DEL VIAJERO: {{$taveler->phone}}</p>
        </div>
    </div>
</body>
</html>