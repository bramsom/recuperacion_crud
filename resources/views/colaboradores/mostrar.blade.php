<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETALLES DE LOS COLABORADORES</title>
    </head>
<body>
    <div class="container">
        <h1>DATOS DEL COLABORADOR</h1>
        <div>
            <p>ID: {{$collaborator->id}}</p>
            <p>NIF DEL COLABORADOR {{$collaborator->nif}}</p>
            <p>NOMBRE DEL COLABORADOR: {{$collaborator->name}}</p>
        </div>
    </div>
</body>
</html>