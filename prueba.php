<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $var = 20; /*variable global*/
    function PruebaSinGlobal()
    {
        $var++;
        echo "Prueba sin global. \$var :" . $var . "<BR>";
    }
    function PruebaConGlobal()
    {
        global $var;
        $var++;
        echo "Prueba con global. \$var :" . $var . "<BR>";
    }
    function PruebaConGlobals()
    {
        $GLOBALS['var']++;
        echo "Prueba con globals. \$var :" . $GLOBALS['var'] . "<BR>";
    }
    PruebaSinGlobal();
    PruebaConGlobal();
    PruebaConGlobals();
    ?>
<!-- s -->
</body>

</html>