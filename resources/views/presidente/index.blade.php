<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista presidente</h1>

    @foreach ($presidente as $presidente)
    <tr>
        <br>
        <td>{{$presidente->dni}}</td>
        <td>{{$presidente->nombre}}</td>
        <td>{{$presidente->apellidos}}</td>
        <td>{{$presidente->año}}</td>
        <td>{{$presidente->fecha_nac}}</td>
        
        <br>
        <td><a href="{{route('presidente.show',$presidente->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('presidente.destroy',$presidente->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('presidente.edit',$presidente->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>