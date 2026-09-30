<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $torneo = ["Ana" => 850, "Carlos" => 420, "Marta" => 1250, "Luis" => 670, "Laura" => 980];
    function informe()
    {
        global $torneo;
        foreach ($torneo as $jugador => $puntos) {
            if ($puntos > 500) {
                echo "Menos de 500 puntos -> " . $jugador . ": " . $puntos ." puntos";
            }
        }
    }
    color();
    nombres();
    notas();
    ?>

</body>

</html>