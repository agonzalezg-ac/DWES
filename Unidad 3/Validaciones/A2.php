<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Validaciones</title>
</head>

<body>
    <form method="post" action="">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $edad = $_POST['edad'] ?? '';
    if (!filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 18, "max_range" => 99]])) {
        echo "Edad no válido.";
    } else {
        echo "Edad correcta.";
    }
    ?>
</body>

</html>