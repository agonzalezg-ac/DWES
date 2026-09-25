<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $x = 10;
    function suma()
    {
        global $x;
        $x += 5;
        echo "El valor de la suma es: " . $x . "<BR>";
    }
    function resta()
    {
        global $x;
        $x -= 3;
        echo "El valor de la resta es: " . $x . "<BR>";
    }
    function multiplicacion()
    {
        global $x;
        $x *= 2;
        echo "El valor de la multiplicación es: " . $x . "<BR>";
    }
    function division()
    {
        global $x;
        $x /= 4;
        echo "El valor de la división es: " . $x . "<BR>";
    }
    function modulo()
    {
        global $x;
        $x %= 3;
        echo "El valor del módulo es: " . $x . "<BR>";
    }
    suma();
    resta();
    multiplicacion();
    division();
    modulo();
    ?>

</body>

</html>