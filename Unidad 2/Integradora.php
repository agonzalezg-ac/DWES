<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');

    $torneo = [
        "Ana" => 850,
        "Carlos" => 420,
        "Marta" => 1250,
        "Luis" => 670,
        "Laura" => 980
    ];
    function categoria($puntos)
    {
        if ($puntos < 500) {
            return "Menos de 500 puntos";
        } elseif ($puntos >= 500 && $puntos <= 799) {
            return "Entre 500 y 799 puntos";
        } elseif ($puntos >= 800 && $puntos <= 999) {
            return "Entre 800 y 999 puntos";
        } else {
            return "1000 puntos o más";
        }
    }

    function mostrarJugadores($torneo)
    {
        echo "<h3>Jugadores del torneo</h3>";
        foreach ($torneo as $jugador => $puntos) {
            echo $jugador . ": " . $puntos . " puntos - " . categoria($puntos) . "<br>";
        }
    }

    function mostrarEstadisticas($torneo)
    {
        $participantes = 0;
        $sumaPuntos = 0;
        $jugadoresCon500 = 0;
        $expertos = 0;
        $puntuacionMaxima = 0;
        $puntuacionMinima = 999999;
        $jugadorMasAlta = "";

        foreach ($torneo as $jugador => $puntos) {
            $participantes++;
            $sumaPuntos += $puntos;

            if ($puntos >= 500) {
                $jugadoresCon500++;
            }
            if ($puntos >= 1000) {
                $expertos++;
            }
            if ($puntos > $puntuacionMaxima) {
                $puntuacionMaxima = $puntos;
                $jugadorMasAlta = $jugador;
            }
            if ($puntos < $puntuacionMinima) {
                $puntuacionMinima = $puntos;
            }
        }

        $puntuacionMedia = $sumaPuntos / $participantes;

        echo "<h3>Estadísticas del torneo</h3>";
        echo "Número de jugadores: " . $participantes . "<br>";
        echo "Jugadores con al menos 500 puntos: " . $jugadoresCon500 . "<br>";
        echo "Jugadores en la categoría Experto: " . $expertos . "<br>";
        echo "Puntuación media: " . $puntuacionMedia . " puntos<br>";
        echo "Puntuación más alta: " . $puntuacionMaxima . " puntos<br>";
        echo "Jugador con mayor puntuación: " . $jugadorMasAlta . "<br>";
        echo "Puntuación más baja: " . $puntuacionMinima . " puntos<br>";
    }
    function mostrarClasificacion($torneo)
    {
        echo "<h3>Clasificación</h3>";   
        arsort($torneo);
        $posicion = 1;
        foreach ($torneo as $jugador => $puntos) {
            echo $posicion . ". " . $jugador . ": " . $puntos . " puntos <br>";
            $posicion++;
        }
    }
    
    $opcion = $_POST['opcion'] ?? null;

    if ($opcion === null) {
        echo "<h2>Menú del torneo</h2>";
        echo "<form method='POST'>";
        echo "<select name='opcion'>";
        echo "<option value='1'>1. Mostrar jugadores</option>";
        echo "<option value='2'>2. Mostrar estadísticas</option>";
        echo "<option value='3'>3. Mostrar clasificación</option>";
        echo "<option value='4'>4. Salir</option>";
        echo "</select>";
        echo "<input type='submit' value='Seleccionar'>";
        echo "</form>";
    } else {
        switch ($opcion) {
            case 1:
                mostrarJugadores($torneo);
                break;
            case 2:
                mostrarEstadisticas($torneo);
                break;
            case 3:
                mostrarClasificacion($torneo);
                break;
            case 4:
                echo "Fin del programa. Gracias por consultar el torneo.";
                break;
            default:
                echo "Opción no válida.";
                break;
        }

        echo "<br><br><a href='Integradora.php'>Volver al menú</a>";
    }
    ?>

</body>

</html>