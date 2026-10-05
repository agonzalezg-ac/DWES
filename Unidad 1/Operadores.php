<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $num1 = 10;
    $num2 = 2;
    function suma()
    {
        $suma = $GLOBALS['num1'] + $GLOBALS['num2'];
        echo "La suma es: " . $suma . "<BR>";
    }
    function resta()
    {
        $resta = $GLOBALS['num1'] - $GLOBALS['num2'];
        echo "La resta es: " . $resta . "<BR>";
    }
    function multiplicacion()
    {
        $multiplicacion = $GLOBALS['num1'] * $GLOBALS['num2'];
        echo "La multiplicación es: " . $multiplicacion . "<BR>";
    }
    function division()
    {
        $division = $GLOBALS['num1'] / $GLOBALS['num2'];
        echo "La división es: " . $division . "<BR>";
    }
    function resto()
    {
        $resto = $GLOBALS['num1'] % $GLOBALS['num2'];
        echo "El resto es: " . $resto . "<BR>";
    }
    function mayor()
    {
        $mayor = $GLOBALS['num1'] > $GLOBALS['num2'];
        if ($mayor === true) {
            echo "El mayor es: " . $GLOBALS['num1'] . "<BR>";
        } else {
            echo "El mayor es: " . $GLOBALS['num2'] . "<BR>";
        }
    }
    function igual()
    {
        $igual = $GLOBALS['num1'] === $GLOBALS['num2'];
        if ($igual === true) {
            echo "Los números son iguales" . "<BR>";
        } else {
            echo "Los números son diferentes" . "<BR>";
        }
    }

    function mayoresQue()
    {
        if ($GLOBALS['num1'] > 5 && $GLOBALS['num2'] > 5) {
            echo "Ambos números son mayores que 5 " . "<BR>";
        }else{
            echo "Ambos números no son mayores que 5 " . "<BR>";
        }
    }
    function menoresQue()
    {
        if ($GLOBALS['num1'] < 5 || $GLOBALS['num2'] < 5) {
            echo "Alguno de los números es menor que 5 " . "<BR>";
        }else{
            echo "Ambos números no son menores que 5 " . "<BR>";
        }
    }
    suma();
    resta();
    multiplicacion();
    division();
    resto();
    mayor();
    igual();
    mayoresQue();
    menoresQue();
    ?>

</body>

</html>