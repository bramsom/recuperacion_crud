<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista de presidentes</title>
    <!-- Agregamos la librería de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>lista de colaboradores</h1>

        <table class="custom-table"> <!-- Agregamos una clase para la tabla -->
            <tr>
                <th>ID</th>
                <th>NIF</th>
                <th>NOMBRE</th>
                <th>MOSTRAR</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            @foreach ($collaborators as $collaborator)
            {{-- creo una fila --}}
            <tr>
                <td>{{$collaborator->id}}</td>
                <td>{{$collaborator->nif}}</td>
                <td>{{$collaborator->name}}</td>
                <!-- Usamos iconos de FontAwesome para mostrar y eliminar -->
                <td><a href="{{route('colaborador.show', $collaborator->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{route('colaborador.edit', $collaborator->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('colaborador.destroy',$collaborator->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <!-- Cambiamos el color del botón de la caneca a rosa pastel -->
                    <td><button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>