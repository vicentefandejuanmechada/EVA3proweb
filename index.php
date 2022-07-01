<!-- DOCTYPE html-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <form action="controller/alumno.php" method="post">
        <label for="rut">Rut</label>
        <input type="text" name="rut" id="rut">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <label for="carrera">Carrera</label>
        <input type="text" name="carrera" id="carrera">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>