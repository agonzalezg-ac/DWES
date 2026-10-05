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
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $ciudad = $_GET['ciudad'];

        echo "<p>Vives en $ciudad</p>";
    }
    ?>
</body>

</html>