<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    function contar()
    {
        $contador = 1;
         do {
            echo $contador . "<br>";
            $contador++;
        } while ($contador <= 5);
    }
    function contraseña()
    {
        $contraseña = "1234";
         do {
            if($contraseña != "1234"){
            echo "Contraseña incorrecta, vuelve a intentarlo" . "<br>";
            }
        } while ($contraseña != "1234");
        echo "Acceso permitido" . "<br>";
    }
    contar();
    contraseña();
    ?>

</body>

</html>