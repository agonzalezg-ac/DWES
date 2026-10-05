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

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje:</label>
        <input type="text" id="mensaje" name="mensaje" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $mensaje = $_GET['mensaje'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Correo electrónico: $email</p>";
        echo "<p>Mensaje: $mensaje</p>";
    }
    ?>
</body>

</html>