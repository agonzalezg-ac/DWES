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
    <form method="post" action="">
        <label for="producto">Nombre del producto:</label>
        <input type="text" id="producto" name="producto" required>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_POST)) {
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $descuento = $precio * 0.10;
        $precioF = $precio - $descuento;
        echo "<p>Producto: $producto</p>";
        echo "<p>Precio: $precio €</p>";
        echo "<p>Descuento: $descuento €</p>";
        echo "<p>Precio final: $precioF €</p>";
    }
    ?>
</body>

</html>