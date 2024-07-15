<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>crear origenes</h1>

    <form action="{{route('origen.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            codigo de origen:
            <br>
            <input type="string" name="code_origin">  
        </label>
        <br>
        <label>
            nombre de origen:
            <br>
            <input type="string" name="name_origin">
        </label>
        <br>
        <label>
            otros datos:
            <br>
            <input type="string" name="other_dates_o">
        </label>
        <br>
        <br>
        <button type="submit" class="submit-button">Enviar datos del origen</button>
    </form>
        <br>
        <form action="{{route('origen.index')}}">
            <button type="submit" class="view-button">ver registros de origenes</button>
        </form>
</body>
</html>