<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>asociacion de equipos a partidos:</h1>

    <form action="{{route('game_team.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>equipos:</h1>
        <select name="team_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->id }} - {{ $team->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>partidos:</h1>    
        <select name="game_id">
            @foreach($games as $game)
                <option value="{{ $game->id }}">{{ $game->id }} - {{ $game->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>