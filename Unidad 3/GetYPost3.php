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

    <?php
    if (!empty($_GET)) {
        $producto = $_GET['producto'];

        echo "<p>Producto buscado: $producto</p>";
    }
    ?>
</body>

</html>