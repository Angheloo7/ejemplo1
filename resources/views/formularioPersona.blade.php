<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('personas.guardar')}}">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <h1></h1>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos">
        <h1></h1>

        <label for="ci">CI:</label>
        <input type="number" name="ci" id="ci">
        <h1></h1>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <h1></h1>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo">
        <h1></h1>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>