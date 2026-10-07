<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Datos con GET</title>
</head>

<body>
    <?php
    $opcion = $_GET['opcion'] ?? null;

    if ($opcion === null) {
        echo "<h2>Tienda</h2>";
        echo "<form method='GET' action='GetYPost6.php'>";
        echo "<select name='opcion'>";
        echo "<option value='1'>1. Ordenadores</option>";
        echo "<option value='2'>2. Periféricos</option>";
        echo "<option value='3'>3. Móviles</option>";
        echo "<option value='4'>4. Componentes</option>";
        echo "</select>";
        echo "<input type='submit' value='Seleccionar'>";
        echo "</form>";
    } else {
        switch ($opcion) {
            case 1:
                echo " Categoría seleccionada: Ordenadores";
                break;
            case 2:
                echo " Categoría seleccionada: Periféricos";
                break;
            case 3:
                echo " Categoría seleccionada: Móviles";
                break;
            case 4:
                echo " Categoría seleccionada: Componentes";
                break;
            default:
                echo "Opción no válida.";
                break;
        }

        echo "<br><br><a href='GetYPost6.php'>Volver al menú</a>";
    }
    ?>
</body>

</html>