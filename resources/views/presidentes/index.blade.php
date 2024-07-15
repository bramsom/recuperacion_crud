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
        <h1>lista de presidentes</h1>

        <table class="custom-table"> <!-- Agregamos una clase para la tabla -->
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>AÑO</th>
                <th>MOSTRAR</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            @foreach ($presidents as $president)
            {{-- creo una fila --}}
            <tr>
                <td>{{$president->id}}</td>
                <td>{{$president->DNI}}</td>
                <td>{{$president->name}}</td>
                <td>{{$president->last_name}}</td>
                <td>{{$president->birth_date}}</td>
                <td>{{$president->year}}</td>
                <!-- Usamos iconos de FontAwesome para mostrar y eliminar -->
                <td><a href="{{route('presidente.show', $president->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{route('presidente.edit', $president->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('presidente.destroy',$president->id)}}" method="POST">
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