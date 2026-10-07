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
    <h1>Buscar Usuario</h1>
    <form method="get" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (!empty($_GET)) {
        $nombre = $_GET['nombre'];
        echo "<p>Buscando usuario: $nombre</p>";
    }
    ?>
    <h1>Registrar Usuario</h1>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        </p>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        echo "<p>Nombre: $nombre</p>";
        $apellidos = $_POST['apellidos'];
        echo "<p>Apellidos: $apellidos</p>";
        $edad = $_POST['edad'];
        if ($edad < 18) {
            echo "<p>Menor de edad</p>";
        } else if ($edad >= 18 && $edad < 65) {
            echo "<p>Adulto</p>";
        } else {
            echo "<p>Senior</p>";
        }
        $email = $_POST['email'];
        echo "<p>Correo electrónico: $email</p>";
    }
    ?>
</body>

</html>