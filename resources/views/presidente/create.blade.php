<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar presidente</h1>
    <form method="POST" action="{{route('presidente.store')}}">
      @csrf
        <h1>datos del presidente</h1>
      <label>
          dni
          <br>
          <input type="text" name="dni">
      </label>
      <br>
      <label>
          nombre
          <br>
          <input type="text" name="nombre">
      </label>
      <br>
      <label>
          apellidos
          <br>
          <input type="text" name="apellidos">
      </label>
      <br>
      <label>
        año
        <br>
        <input type="text" name="año">
    </label>
    <br>
    <label>
        fecha
        <br>
        <input type="text" name="fecha_nac">
    </label>
    <br>
      
      <br>      
      
      <button type="submit">Enviar Formulario:</button>
      </form>
</body>
</html>