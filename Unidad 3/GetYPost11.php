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
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required>
        <button type="submit">Enviar</button>
    </form>
</p>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        </p>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        unset($_POST);
        $producto = $_GET['producto'];
        echo "<p>Producto: $producto</p>";
    }
    if (!empty($_POST)) {
        unset($_GET);
        $nombre = $_POST['nombre'];
        echo "<p>Nombre: $nombre</p>";
        $email = $_POST['email'];
        echo "<p>Correo electrónico: $email</p>";
        $ciudad = $_POST['ciudad'];
        echo "<p>Ciudad: $ciudad</p>";
    }
    ?>
</body>

</html>