<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>
    <h1>Lista de champs</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <a href="{{route('champs.create')}}">Crear Campeon</a>
    <table>
        <thead>
            <tr>
                <th>campeon</th>
                <th>clase</th>
                <th>fecha_lanzamiento</th>
                <th>esencia_azul</th>
                <th>riot_points</th>
                <th>evidence</th>
            </tr>
        </thead>
        <tbody>
            @foreach($champs as $champ)
                <tr>
                    <td>{{$champ->campeon}}</td>
                    <td>{{$champ->clase}}</td>
                    <td>{{$champ->fecha_lanzamiento}}</td>
                    <td>{{$champ->esencia_azul}}</td>
                    <td>{{$champ->riot_points}}</td>
                    <td>{{$champ->evidence}}</td>
                    <td>
                        <form method="post" action="{{ route('champs.destroy', $champ->id) }}">
                            @csrf
                            @method('delete')
                            <a href="{{ route('champs.edit', $champ->id) }}">Editar</a>
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>