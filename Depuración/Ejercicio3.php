<?php

$jugadores = [
    "Ana" => 850,
    "Carlos" => 420,
    "Marta" => 1250,
    "Luis" => 670,
    "Laura" => 980
];

$totalPuntos = 0;
$jugadores500 = 0;
$mayorPuntuacion = 0;
$ganador = "";

echo "<h1>TORNEO DE VIDEOJUEGOS</h1>";

foreach ($jugadores as $nombre => $puntos) {

    if ($puntos < 500) {
        $categoria = "Principiante";
    } elseif ($puntos < 800) {
        $categoria = "Intermedio";
    } elseif ($puntos < 1000) {
        $categoria = "Avanzado";
    } else {
        $categoria = "Experto";
    }

    echo $nombre . ": " . $puntos . " puntos - " . $categoria . "<br>";

    $totalPuntos += $puntos;

    if ($puntos > 500) {
        $jugadores500++;
    }

    if ($puntos > $mayorPuntuacion) {
        $mayorPuntuacion = $puntos;
        $ganador = $nombre;
    }
}

$media = $totalPuntos / count($jugadores);

echo "<hr>";

echo "Número de jugadores: " . count($jugadores) . "<br>";
echo "Jugadores con 500 puntos o más: " . $jugadores500 . "<br>";
echo "Puntuación media: " . $media . "<br>";
echo "Ganador: " . $ganador . "<br>";
echo "Mayor puntuación: " . $mayorPuntuacion . "<br>";

?>