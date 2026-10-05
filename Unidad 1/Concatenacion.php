<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $mensaje = "Hola";
    function hola()
    {
        global $mensaje;
        echo $mensaje . "<BR>";
    }
    function mundo()
    {
        global $mensaje;
        $mensaje .= " Mundo";
        echo $mensaje . "<BR>";
    }
    function maravilloso()
    {
        global $mensaje;
        $mensaje .= " Maravilloso";
        echo $mensaje . "<BR>";
    }
    hola();
    mundo();
    maravilloso()
    ?>

</body>

</html>