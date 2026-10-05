<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Datos con GET</title>
</head>

<body>
    <form method="get" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $nombre = $_GET['nombre'];
        $apellidos= $_GET['apellidos'];
        $edad = $_GET['edad'];
        $email = $_GET['email'];
        $mensaje = $_GET['mensaje'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $apellidos</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Correo electrónico: $email</p>";
        echo "<p>Mensaje: $mensaje</p>";
    }
    ?>
</body>

</html>