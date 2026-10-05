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

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: $edad</p>";
    }
    ?>
</body>

</html>