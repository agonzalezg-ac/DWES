<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    $dia = 3;
    $opcion = 2;
    function diaSemana()
    {
        global $dia;
        switch ($dia) {
            case 1:
                echo "Lunes" . "<BR>";
                break;
            case 2:
                echo "Martes" . "<BR>";
                break;
            case 3:
                echo "Miércoles" . "<BR>";
                break;
            case 4:
                echo "Jueves" . "<BR>";
                break;
            case 5:
                echo "Viernes" . "<BR>";
                break;
            case 6:
                echo "Sábado" . "<BR>";
                break;
            case 7:
                echo "Domingo" . "<BR>";
                break;
            default:
                echo "Día incorrecto" . "<BR>";
        }
    }
    function menu()
    {
        global $opcion;
        switch ($opcion) {
            case 1:
                echo "Ver usuarios" . "<BR>";
                break;
            case 2:
                echo "Ver productos" . "<BR>";
                break;
            case 3:
                echo "Ver pedidos" . "<BR>";
                break;
            case 4:
                echo "Salir" . "<BR>";
                break;
            default:
                echo "Opción no válida" . "<BR>";
        }
    }
    diaSemana();
    menu();
    ?>

</body>

</html>