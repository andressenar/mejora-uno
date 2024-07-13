<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista jugador</h1>

    @foreach ($jugador as $jugador)
    <tr>
        <br>
        <td>{{$jugador->fecha_nac}}</td>
        <td>{{$jugador->codigo}}</td>
        <td>{{$jugador->nombre}}</td>
        <td>{{$jugador->posicion}}</td>
        
        <br>
        <td><a href="{{route('jugador.show',$jugador->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('jugador.destroy',$jugador->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('jugador.edit',$jugador->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>