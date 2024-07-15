<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>asociacion de colaboradores a proyectos:</h1>

    <form action="{{route('collaborator_project.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>colaboradores:</h1>
        <select name="collaborator_id">
            @foreach($collaborators as $collaborator)
                <option value="{{ $collaborator->id }}">{{ $collaborator->id }} - {{ $collaborator->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>proyectos:</h1>    
        <select name="project_id">
            @foreach($projects as $project)
                <option value="{{ $project->id }}">{{ $project->id }} - {{ $project->description}}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>