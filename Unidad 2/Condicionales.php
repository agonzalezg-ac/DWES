<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $edad = 20;
    $numero = -5;
    $password = "1234";
    function mayorEdad()
    {
        global $edad;
        if ($edad >= 18) {
            echo "Es mayor de edad" . "<BR>";
        } else {
            echo "Es menor de edad" . "<BR>";
        }

    }
    function numero()
    {
        global $numero;
        if($numero > 0){
            echo $numero . " es positivo" . "<BR>";
        } elseif ($numero==0){
            echo $numero . " es cero" . "<BR>";
        } else {
            echo $numero . " es negativo" . "<BR>";
        }
    }
    function contraseña()
    {
        global $password;
        if ($password == "1234"){
            echo "Contraseña correcta". "<BR>";
        } else {
            echo "Contraseña incorrecta". "<BR>";
        }
    }
    mayorEdad();
    numero();
    contraseña();
        ?>

</body>

</html>