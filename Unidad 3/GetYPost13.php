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
    $peliculas = [
        "Misión Imposible" => "Acción",
        "Fast and Furious" => "Acción",
        "Torrente" => "Comedia",
        "Scary Movie" => "Comedia",
        "Star Wars" => "Ciencia ficción",
        "Interestelar" => "Ciencia ficción",
        "Posesion" => "Terror",
        "El Resplandor" => "Terror",
    ];
    if ($opcion === null) {
        echo "<h1>Parte 1</h1>";
        echo "<form method='GET' action='GetYPost13.php'>";
        echo "<select name='opcion'>";
        echo "<option value='1'>1. Acción</option>";
        echo "<option value='2'>2. Comedia</option>";
        echo "<option value='3'>3. Ciencia ficción</option>";
        echo "<option value='4'>4. Terror</option>";
        echo "</select>";
        echo "<input type='submit' value='Seleccionar'>";
        echo "</form>";
    } else {
        switch ($opcion) {
            case 1:
                echo " <h2>Acción</h2>";
                foreach ($peliculas as $pelicula => $genero) {
                    if ($genero === "Acción") {
                        echo $pelicula . "</br>";
                    }
                }
                break;
            case 2:
                echo " <h2>Comedia</h2>";
                foreach ($peliculas as $pelicula => $genero) {
                    if ($genero === "Comedia") {
                        echo $pelicula . "</br>";
                    }
                }
                break;
            case 3:
                echo " <h2>Ciencia ficción</h2>";
                foreach ($peliculas as $pelicula => $genero) {
                    if ($genero === "Ciencia ficción") {
                        echo $pelicula . "</br>";
                    }
                }
                break;
            case 4:
                echo " <h2>Terror</h2>";
                foreach ($peliculas as $pelicula => $genero) {
                    if ($genero === "Terror") {
                        echo $pelicula . "</br>";
                    }
                }
                break;
            default:
                echo "Opción no válida.";
                break;
        }
        echo "<br><br><a href='GetYPost13.php'>Volver al menú</a>";
    }
    ?>
    <h1>Parte 2</h1>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        </br>
        <label for="pelicula">Pelicula:</label>
        <input type="text" id="pelicula" name="pelicula" required>
        </br>
        <label for="entradas">Número de entradas:</label>
        <input type="number" id="entradas" name="entradas" required>
        </br>
        <label for="tipo">Tipo de entrada:</label>
        <select name="tipo" required>
            <option value="normal">Normal</option>
            <option value="estudiante">Estudiante</option>
            <option value="jubilado">Jubilado</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $pelicula = ucwords($_POST['pelicula']);
        $entradas = $_POST['entradas'];
        $tipo = $_POST['tipo'];
        $existe = false;
        $precio = 8;
        $descuento;
        $total;
        if ($tipo === "estudiante") {
            $descuento = 0.25;
        } else if ($tipo === "jubilado") {
            $descuento = 0.4;
        } else {
            $descuento = 0;
        }
        $total = ($precio - ($precio * $descuento)) * $entradas;
        foreach ($peliculas as $peliculaE => $genero) {
            if ($pelicula === $peliculaE) {
                $existe = true;
            }
        }
        if ($existe) {
            if ($entradas <= 0) {
                echo "<p>Cantidad de entradas no valida.</p>";
            } else if ($entradas >= 5) {
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Película: $pelicula</p>";
                echo "<p>Entradas: $entradas</p>";
                echo "<p>Tipo: $tipo</p>";
                echo "<p>Precio Total: $total</p>";
                echo "<p>Reserva para un grupo numeroso.</p>";
            } else {
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Película: $pelicula</p>";
                echo "<p>Entradas: $entradas</p>";
                echo "<p>Tipo: $tipo</p>";
                echo "<p>Precio Total: $total</p>";
            }
        } else {
            echo "<p>Esa pelicula no existe.</p>";
        }
    }
    ?>
</body>

</html>