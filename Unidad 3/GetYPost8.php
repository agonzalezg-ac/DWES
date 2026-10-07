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
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_POST)) {
        $edad = $_POST['edad'];
        if($edad >= 18){
            echo "<p>Es mayor de edad.</p>";
        }else{
            echo "<p>Es menor de edad.</p>";
        }
    }
    ?>
</body>

</html>