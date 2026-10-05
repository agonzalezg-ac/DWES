<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    function contar()
    {
        $contador = 1;
        while ($contador <= 10) {
            echo $contador . "<br>";
            $contador++;
        }
    }
    function cuentaAtras()
    {
        $contador = 10;
        while ($contador >= 1) {
            echo $contador . "<br>";
            $contador--;
        }
        echo "¡Despegamos!" . "<br>";
    }
    contar();
    cuentaAtras();
    ?>

</body>

</html>