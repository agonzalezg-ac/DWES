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
        <label for="url">Url:</label>
        <input type="url" id="url" name="url" required>
        <label for="ip">IP:</label>
        <input type="ip" id="ip" name="ip" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $url = $_POST['url'] ?? '';
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo "URL no válido.";
    } else {
        echo "URL correcto.";
    }
    $ip = $_POST['ip'] ?? '';
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "IP no válido.";
    } else {
        echo "IP correcto.";
    }
    ?>
</body>

</html>