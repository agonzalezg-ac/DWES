<?php

$productos = [
    "Teclado" => 15,
    "Ratón" => 7,
    "Monitor" => 4,
    "Webcam" => 12,
    "Auriculares" => 3
];

$total = 0;
$productoMayor = "";
$mayorStock = 0;

foreach ($productos as $producto => $stock) {

    echo $producto . ": " . $stock . " unidades<br>";

    $total += $stock;

    if ($stock < 5) {
        echo "STOCK BAJO<br>";
    }

    if ($stock < $mayorStock) {
        $mayorStock = $stock;
        $productoMayor = $producto;
    }
}

echo "<hr>";

echo "Total de unidades: " . $total . "<br>";
echo "Producto con mayor stock: " . $productoMayor . "<br>";
echo "Mayor stock: " . $mayorStock;

?>