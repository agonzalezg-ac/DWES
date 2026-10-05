<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $logueado = false;
    $administrador = true;
    $voluntario = true;
    function logueadoAdmin()
    {
        global $logueado;
        global $administrador;
        echo "El usuario esta logueado y es administrador: <BR>";
        var_dump($logueado && $administrador);
        echo"<BR>";
    }
    function adminOvol()
    {
        global $administrador;
        global $voluntario;
        echo "El usuario es administrador o es voluntario: <BR>";
        var_dump($administrador || $voluntario);
        echo"<BR>";
    }
    function logueado()
    {
        global $logueado;
        echo "El usuario no esta logueado: <BR>";
        var_dump(!$logueado);
        echo"<BR>";
    }
    function una()
    {
        global $administrador;
        global $voluntario;
        echo "El usuario es administrador o voluntario, pero no ambas: <BR>";
        var_dump($administrador xor $voluntario);
        echo"<BR>";
    }
    logueadoAdmin();
    adminOvol();
    logueado();
    una();
    ?>

</body>

</html>