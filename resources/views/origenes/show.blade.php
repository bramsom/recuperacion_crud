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
        <h1>DETALLES DE LOS ORIGENES</h1>
        <div>
            <p>ID: {{$origin->id}}</p>
            <p>CODIGO DEL ORIGEN: {{$origin->code_origin}}</p>
            <p>NOMBRE DEL ORIGEN: {{$origin->name_origin}}</p>
            <p>OTROS DATOS DEL ORIGEN: {{$origin->other_dates_o}}</p>
        </div>
    </div>
</body>
</html>