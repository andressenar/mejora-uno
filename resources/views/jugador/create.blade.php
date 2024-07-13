<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar jugador</h1>
    <form method="POST" action="{{route('jugador.store')}}">
      @csrf
        <h1>datos del jugador</h1>
      <label>
          fecha_nac
          <br>
          <input type="text" name="fecha_nac">
      </label>
      <br>
      <label>
          codigo
          <br>
          <input type="text" name="codigo">
      </label>
      <br>
      <label>
          nombre
          <br>
          <input type="text" name="nombre">
      </label>
      <br>
      <label>
        posicion
        <br>
        <input type="text" name="posicion">
    </label>
    <br>
      
      <br>      
      
      <button type="submit">Enviar Formulario:</button>
      </form>
</body>
</html>