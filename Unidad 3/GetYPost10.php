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
        <label for="precio">Precio máximo:</label>
        <input type="number" id="precio" name="precio" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $precio = $_GET['precio'];
        if ($precio < 20) {
            echo "<p>Productos Económicos.</p>";
        } else if($precio >=20 && $precio <= 50){
            echo "<p>Productos de precio medio.</p>";
        } else {
            echo "<p>Productos de gama alta.</p>";
        }
    }
    ?>
</body>

</html>