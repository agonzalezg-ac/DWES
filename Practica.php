<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');

    $temperaturas = [
        "Santander" => 21,
        "Torrelavega" => 24,
        "Reinosa" => 17,
        "Castro Urdiales" => 22,
        "Potes" => 28,
        "Laredo" => 23
    ];
    function temperaturas($temperaturas)
    {
        if ($temperaturas < 18) {
            return "Temperatura baja";
        } elseif ($temperaturas >= 18 && $temperaturas <= 23) {
            return "Temperatura moderada";
        } elseif ($temperaturas >= 23 && $temperaturas <= 27) {
            return "Temperatura alta";
        } else {
            return "Temperatura muy alta";
        }
    }

    function localidades($temperaturas)
    {
        echo "<h3>Localidades y sus temperaturas</h3>";
        foreach ($temperaturas as $localidad => $temperatura) {
            echo $localidad . ": " . $temperatura . "°C - " . temperaturas($temperatura) . "<br>";
        }
    }

    function temperaturaAlta($temperaturas)
    {
        $localidadMaxima = "";
        $temperaturaMaxima = 0;

        foreach ($temperaturas as $localidad => $temperatura) {
            if ($temperatura > $temperaturaMaxima) {
                $temperaturaMaxima = $temperatura;
                $localidadMaxima = $localidad;
            }
        }
        return [$localidadMaxima, $temperaturaMaxima];
    }
    function temperaturaBaja($temperaturas)
    {
        $localidadBaja = "";
        $temperaturaBaja = 999999;

        foreach ($temperaturas as $localidad => $temperatura) {
            if ($temperatura < $temperaturaBaja) {
                $temperaturaBaja = $temperatura;
                $localidadBaja = $localidad;
            }
        }
        return [$localidadBaja, $temperaturaBaja];
    }
    function mostrarEstadisticas($temperaturas)
    {
        $localidades = 0;
        $sumaTemperatura = 0;
        $localidadesMas23 = 0;
        [$localidadMaxima, $temperaturaMaxima] = temperaturaAlta($temperaturas);
        [$localidadBaja, $temperaturaBaja] = temperaturaBaja($temperaturas);
        foreach ($temperaturas as $localidad => $temperatura) {
            $localidades++;
            $sumaTemperatura += $temperatura;
            if ($temperatura >= 23) {
                $localidadesMas23++;
            }
        }
        $mediaTemperatura = $sumaTemperatura / $localidades;
        echo "<h3>Estadísticas Generales</h3>";
        echo "Número de localidades registradas: " . $localidades . "<br>";
        echo "Temperatura total acumulada: " . $sumaTemperatura . "ºC<br>";
        echo "Temperatura media: " . $mediaTemperatura . "ºC <br>";
        echo "Número de localidades que han registrado 23ºC o más: " . $localidadesMas23 . "<br>";
        echo "Localidad con la temperatura más alta: " . $localidadMaxima . "<br>";
        echo "Temperatura máxima registrada: " . $temperaturaMaxima . "ºC<br>";
        echo "Localidad con la temperatura más baja: " . $localidadBaja . "<br>";
        echo "Temperatura mínima registrada: " . $temperaturaBaja . "ºC<br>";
    }
    function díasExtremos($temperaturas)
    {
        $localidadesMas25 = [];
        $localidadesMenos20 = [];
        $cat1 = 0;
        $cat2 = 0;
        $cat3 = 0;
        $cat4 = 0;
        $localidades = 0;
        $localidadesMas23 = 0;
        foreach ($temperaturas as $localidad => $temperatura) {
            $localidades++;
            if ($temperatura < 18) {
                $localidadesMenos20[count($localidadesMenos20)] = $localidad;
                $cat1++;
            }
            if ($temperatura >= 18 && $temperatura < 23) {
                if ($temperatura < 20) {
                    $localidadesMenos20[count($localidadesMenos20)] = $localidad;
                }
                $cat2++;
            }
            if ($temperatura >= 23 && $temperatura < 27) {
                $cat3++;
                $localidadesMas23++;
                if ($temperatura > 25) {
                    $localidadesMas25[count($localidadesMas25)] = $localidad;
                }
            }
            if ($temperatura > 27) {
                $localidadesMas23++;
                $localidadesMas25[count($localidadesMas25)] = $localidad;
                $cat4++;
            }
        }
        $porcentajeMas23 = ($localidadesMas23 / $localidades) * 100;
        echo "<h3>Días extremos</h3>";
        echo "Todas las localidades que hayan superado los 25ºC: <br>";
        foreach ($localidadesMas25 as $localidad) {
            echo "*" . $localidad . "<br>";
        }
        echo "Todas las localidades que hayan registrado menos de 20ºC: <br>";
        foreach ($localidadesMenos20 as $localidad) {
            echo "*" . $localidad . "<br>";
        }
        echo "Categoria 1 (menos de 18ºC): " . $cat1 . " localidades<br>";
        echo "Categoria 2 (entre 18ºC y 23ºC): " . $cat2 . " localidades<br>";
        echo "Categoria 3 (entre 23ºC y 27ºC): " . $cat3 . " localidades<br>";
        echo "Categoria 4 (más de 27ºC): " . $cat4 . " localidades<br>";
        echo "Porcentaje de localidades que han registrado 23ºC o más: " . $porcentajeMas23 . "%<br>";
    }
    function comparacionTemperaturas($temperaturas)
    {
        $localidades = 0;
        $sumaTemperaturas = 0;
        foreach ($temperaturas as $localidad => $temperatura) {
            $localidades++;
            $sumaTemperaturas += $temperatura;
        }
        $mediaTemperaturas = $sumaTemperaturas / $localidades;
        $localidadesMasMedia = [];
        $localidadesMenosMedia = [];
        $nLocalidadesMasMedia = 0;
        $nLocalidadesMenosMedia = 0;
        foreach ($temperaturas as $localidad => $temperatura) {
            if ($temperatura > $mediaTemperaturas) {
                $localidadesMasMedia[count($localidadesMasMedia)] = $localidad;
                $nLocalidadesMasMedia++;
            }
            if ($temperatura < $mediaTemperaturas) {
                $localidadesMenosMedia[count($localidadesMenosMedia)] = $localidad;
                $nLocalidadesMenosMedia++;
            }
        }
        echo "<h3>Comparación de Temperaturas</h3>";
        echo "Media de temperaturas: " . $mediaTemperaturas . "ºC<br>";
        echo "Localidades por encima de la media: <br>";
        foreach ($localidadesMasMedia as $localidad) {
            echo "*" . $localidad . "<br>";
        }
        echo "Localidades por debajo de la media: <br>";
        foreach ($localidadesMenosMedia as $localidad) {
            echo "*" . $localidad . "<br>";
        }
        echo "Numero de localidades por encima de la media: " . $nLocalidadesMasMedia . "<br>";
        echo "Numero de localidades por debajo de la media: " . $nLocalidadesMenosMedia . "<br>";
    }
    function rankingTemperaturas($temperaturas)
    {
        echo "<h3>Clasificación</h3>";
        arsort($temperaturas);
        $posicion = 1;
        foreach ($temperaturas as $localidad => $temperatura) {
            echo $posicion . ". " . $localidad . ": " . $temperatura . "ºC<br>";
            $posicion++;
        }
    }
    $opcion = $_POST['opcion'] ?? null;

    if ($opcion === null) {
        echo "<h2>Menú de temperaturas</h2>";
        echo "<form method='POST'>";
        echo "<select name='opcion'>";
        echo "<option value='1'>1. Mostrar todas las localidades y sus temperaturas.</option>";
        echo "<option value='2'>2. Mostrar la localidad con la temperatura más alta.</option>";
        echo "<option value='3'>3. Mostrar la localidad con la temperatura más baja.</option>";
        echo "<option value='4'>4. Mostrar las estadísticas generales.</option>";
        echo "<option value='5'>5. Mostrar los días extremos.</option>";
        echo "<option value='6'>6. Comparación de temperaturas.</option>";
        echo "<option value='7'>7. Ranking de temperaturas.</option>";
        echo "<option value='8'>8. Salir</option>";
        echo "</select>";
        echo "<input type='submit' value='Seleccionar'>";
        echo "</form>";
    } else {
        switch ($opcion) {
            case 1:
                localidades($temperaturas);
                break;
            case 2:
                [$localidadMaxima, $temperaturaMaxima] = temperaturaAlta($temperaturas);
                echo "<h3>Temperatura más alta</h3>";
                echo $localidadMaxima . ": " . $temperaturaMaxima . "ºC<br>";
                break;
            case 3:
                [$localidadBaja, $temperaturaBaja] = temperaturaBaja($temperaturas);
                echo "<h3>Temperatura más baja</h3>";
                echo $localidadBaja . ": " . $temperaturaBaja . "ºC<br>";
                break;
            case 4:
                mostrarEstadisticas($temperaturas);
                break;
            case 5:
                díasExtremos($temperaturas);
                break;
            case 6:
                comparacionTemperaturas($temperaturas);
                break;
            case 7:
                rankingTemperaturas($temperaturas);
                break;
            case 8:
                echo "Fin del programa. Gracias por consultar las temperaturas.";
                break;
            default:
                echo "Opción no válida.";
                break;
        }

        echo "<br><br><a href='Practica.php'>Volver al menú</a>";
    }
    ?>

</body>

</html>