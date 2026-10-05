<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $numero = 10;
    function valorInicial()
    {
        echo "El valor inicial es: " . $GLOBALS['numero'] . "<BR>";
    }
    function preincremento()
    {
        echo "El valor después del preincremento es: " . ++$GLOBALS['numero'] . "<BR>";
    }
    function postincremento()
    {
        echo "El valor después del postincremento es: " . $GLOBALS['numero']++ . "<BR>";
    }function predecremento()
    {
        echo "El valor después del predecremento es: " . --$GLOBALS['numero'] . "<BR>";
    }
    function postecremento()
    {
        echo "El valor después del postdecremento es: " . $GLOBALS['numero']-- . "<BR>";
    }
    valorInicial();
    preincremento();
    valorInicial();
    postincremento();
    valorInicial();
    predecremento();
    valorInicial();
    postecremento();
    valorInicial();
    ?>

</body>

</html>