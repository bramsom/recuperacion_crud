<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
    <!-- Agregamos la librería de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>LISTA DE LOS ORIGENES</h1>

        <table class="custom-table"> <!-- Agregamos una clase para la tabla -->
            <tr>
                <th>ID</th>
                <th>CODIGO DE ORIGEN</th>
                <th>NOMBRE DE ORIGEN</th>
                <th>OTROS DATOS</th>
                <th>MOSTRAR</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            @foreach ($origins as $origin)
            {{-- creo una fila --}}
            <tr>
                <td>{{$origin->id}}</td>
                <td>{{$origin->code_origin}}</td>
                <td>{{$origin->name_origin}}</td>
                <td>{{$origin->other_dates_o}}</td>
                <!-- Usamos iconos de FontAwesome para mostrar y eliminar -->
                <td><a href="{{route('origen.show', $origin->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{ route('origen.edit', $origin->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('origen.destroy',$origin->id)}}" method="POST">
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