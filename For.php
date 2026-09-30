<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    function contar()
    {
           for ($contador = 0; $contador <= 10; $contador++) {
              echo $contador . "<br>";
        }
    }
    function pares()
    {
           for ($contador = 0; $contador <= 20; $contador += 2) {
              echo $contador . "<br>";
        }
    }
    function multiplicar()
    {
        $numero = 5;
           for ($contador = 1; $contador <= 10; $contador++) {
              $calculo = $numero * $contador;
            echo $numero . "*" . $contador . "=" . $calculo . "<br>";
        }
    }
    function suma()
    {
        $suma = 0;
           for ($contador = 1; $contador <= 100; $contador++) {
              $suma += $contador;
        }
        echo "La suma es : " . $suma . "<br>";
    }
    contar();
    pares();
    multiplicar();
    suma();
    ?>

</body>
</html>