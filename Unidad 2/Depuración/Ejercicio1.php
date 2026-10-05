<html>

<head>
    <title>Prueba</title>
</head>

<body></body>
<?php

$notas = [
    "Ana" => 8.5,
    "Luis" => 4.2,
    "Marta" => 6.7,
    "Carlos" => 3.8,
    "Laura" => 9.1
];

$aprobados = 0;
$suma = 0;

foreach ($notas as $alumno => $nota) {

    if ($nota >= 5) {
        echo $alumno . ": " . $nota . " - APROBADO<br>";
        $aprobados++;
    } else {
        echo $alumno . ": " . $nota . " - SUSPENSO<br>";
    }

    $suma += $nota;
}

$media = $suma / count($notas);

echo "<hr>";
echo "Aprobados: " . $aprobados . "<br>";
echo "Nota media: " . $media;

?>

</body>

</html>