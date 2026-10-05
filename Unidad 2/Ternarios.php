<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $edad = 17;
    $numero = 8;
    function mayorEdad()
    {
        global $edad;
        echo $edad >= 18 ? "Es mayor de edad" . "<BR>" : "Es menor de edad" . "<BR>";

    }
    function numero()
    {
        global $numero;
        echo $numero % 2 == 0 ? $numero . " es par" . "<BR>" : $numero . " es impar" . "<BR>";
    }
    mayorEdad();
    numero();
    ?>

</body>

</html>