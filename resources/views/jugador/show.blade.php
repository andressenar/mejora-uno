<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar destino</h1>
<form action="{{route('jugador.update', $jugador)}}"  method="POST">

    @csrf
    @method('put')
    <label>
        fecha_nac:
        <br>
        <input name="fecha_nac" type="text" value="{{old('fecha_nac',$jugador->fecha_nac) }}">
        <br>
        </label>
        <br>
        <label>
        codigo:
        <br>
        <input name="codigo" type="text" value="{{old('codigo',$jugador->codigo)}}">
        <br>
        </label>
        <br>
        nombre
        <br>
        <input name=" nombre" type="text" value="{{old(' nombre',$jugador->nombre)}}">
        <br>
        </label>
        <br>
        <label>
            posicion:
            <br>
            <input name="posicion" type="text" value="{{old('posicion',$jugador->posicion) }}">
            <br>
            </label>
</form>
</body>
</html>