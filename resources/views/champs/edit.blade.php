<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar campeon</title>
</head>
<body>
    <h1>Editar campeon</h1>
    <a href="{{route('champs.index')}}">Regresar</a>
    <form method="POST" action="{{route('champs.update', $champ->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label>campeon</label>
            <input type="text" name="campeon" id="campeon" value="{{$champ->campeon}}">
        </div>
        <div>
            <label>clase</label>
            <input type="text" name="clase" id="clase" value="{{$champ->clase}}">
        </div>
        <div>
            <label>fecha_lanzamiento</label>
            <input type="text" name="fecha_lanzamiento" id="fecha_lanzamiento" value="{{$champ->fecha_lanzamiento}}">
        </div>
        <div>
            <label>esencia_azul</label>
            <input type="text" name="esencia_azul" id="esencia_azul" value="{{$champ->esencia_azul}}">
        </div>
        <div>
            <label>riot_points</label>
            <input type="text" name="riot_points" id="riot_points" value="{{$champ->riot_points}}">
        </div>
        <div>
            <label>evidence</label>
            <input type="file" name="evidence" id="evidence" value="{{$champ->evidence}}">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
</html>