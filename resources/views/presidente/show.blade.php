<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar presidente</h1>
<form action="{{route('presidente.update', $presidente)}}"  method="POST">

    @csrf
    @method('put')
    <label>
        dni
    <br>
    <input name="dni" type="text" value="{{old('dni',$destino->dni) }}">
    <br>
    </label>
    <br>
    <label>
    nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$destino->nombre)}}">
    <br>
    </label>
    <br>
    apellidos
    <br>
    <input name="apellidos" type="text" value="{{old('apellidos',$destino->apellidos)}}">
    <br>
    <label>
        año
        <br>
        <input name="año" type="text" value="{{old('año',$destino->año)}}">
        <br>
    </label>
    <label>
        fecha nacimiento
        <br>
        <input name="fecha_nac" type="text" value="{{old('fecha_nac',$destino->fecha_nac)}}">
        <br>
    </label>
    
    <button  type="submit">Actualizar destino</button>
   
</form>
</body>
</html>