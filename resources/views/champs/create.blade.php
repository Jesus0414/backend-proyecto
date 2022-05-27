<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Champ</title>
</head>
<body>
    <h1> New Champ </h1>
    <a href="{{route('champs.index')}}">Regresar</a>
    <form method="POST" action="{{route('champs.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>campeon</label>
            <input type="text" name="campeon" id="campeon">
        </div>
        <div>
            <label>Clase</label>
            <input type="text" name="clase" id="clase">
        </div>
        <div>
            <label>Fecha de Lanzamiento</label>
            <input type="date" name="fecha_lanzamiento" id="fecha_lanzamiento">
        </div>
        <div>
            <label>Ensencia Azul</label>
            <input type="number" name="esencia_azul" id="esencia_azul">
        </div>
        <div>
            <label>Riot Points</label>
            <input type="number" name="riot_points" id="riot_points">
        </div>
        <div>
            <label> Evidence </label>
            <input type="file" name="evidence" id="evidence"></button>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>