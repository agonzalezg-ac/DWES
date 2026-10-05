<?php

$ventas = [
    "Ana" => 3250,
    "Luis" => 1850,
    "Marta" => 4720,
    "Carlos" => 2900,
    "Laura" => 5100
];

$totalVentas = 0;
$mayorVenta = 0;
$comercialMayor = "";
$opcion = 4;

foreach ($ventas as $comercial => $venta) {

    $totalVentas += $venta;

    if ($venta > $mayorVenta) {
        $mayorVenta = $venta;
        $comercialMayor = $comercial;
    }
}

$media = $totalVentas / count($ventas);

echo "<h1>EMPRESA</h1>";

echo "1. Mostrar ventas<br>";
echo "2. Mostrar mayor venta<br>";
echo "3. Estadísticas<br>";
echo "4. Salir<br>";

echo "<hr>";

switch ($opcion) {

    case 1:

        foreach ($ventas as $comercial => $venta) {
            echo $comercial . ": " . $venta . " euros<br>";
        }

        break;

    case 2:

        echo "Mayor venta: " . $comercialMayor . "<br>";
        echo "Cantidad: " . $mayorVenta . " euros";

        break;

    case 3:

        echo "Total vendido: " . $totalVentas . " euros<br>";
        echo "Media: " . $media . " euros<br>";
        echo "Número de comerciales: " . count($ventas) . "<br>";

        break;

    case 4:

        echo "Fin del programa.";

        break;

    default:

        echo "Opción incorrecta.";
}

?>