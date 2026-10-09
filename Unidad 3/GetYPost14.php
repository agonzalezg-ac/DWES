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
    $cursos = [
        "Java" => "Iniciación",
        "Html" => "Iniciación",
        "PHP" => "Intermedio",
        "JavaScript" => "Intermedio",
        "Python" => "Avanzado",
        "Base de datos" => "Avanzado",
    ];
    if ($opcion === null) {
        echo "<h1>Cursos</h1>";
        echo "<form method='GET' action=''>";
        echo "<select name='opcion'>";
        echo "<option value='1'>1. Iniciación</option>";
        echo "<option value='2'>2. Intermedio</option>";
        echo "<option value='3'>3. Avanzado</option>";
        echo "</select>";
        echo "<input type='submit' value='Seleccionar'>";
        echo "</form>";
    } else {
        switch ($opcion) {
            case 1:
                echo " <h2>Iniciación</h2>";
                foreach ($cursos as $curso => $nivel) {
                    if ($nivel === "Iniciación") {
                        echo $curso . "</br>";
                    }
                }
                break;
            case 2:
                echo " <h2>Intermedio</h2>";
                foreach ($cursos as $curso => $nivel) {
                    if ($nivel === "Intermedio") {
                        echo $curso . "</br>";
                    }
                }
                break;
            case 3:
                echo " <h2>Avanzado</h2>";
                foreach ($cursos as $curso => $nivel) {
                    if ($nivel === "Avanzado") {
                        echo $curso . "</br>";
                    }
                }
                break;
            default:
                echo "Opción no válida.";
                break;
        }
        echo "<br><br><a href='GetYPost14.php'>Volver al menú</a>";
    }
    ?>
    <h1>Parte 2</h1>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        </br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        </br>
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        </br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        </br>
        <label for="horas">Número de horas semanales disponibles:</label>
        <input type="number" id="horas" name="horas" required>
        </br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $curso = $_POST['curso'];
        $edad = $_POST['edad'];
        $horas = $_POST['horas'];
        $existe = false;
        $dedicación;
        $alumno;
        foreach ($cursos as $cursoE => $nivel) {
            if (strtolower($curso) === strtolower($cursoE)) {
                $existe = true;
            }
        }
        if ($edad < 18) {
            $alumno = "menor de edad";
        } else if ($edad >= 18 && $edad <= 30) {
            $alumno = "joven";
        } else {
            $alumno = "adulto";
        }
        if ($horas < 3) {
            $dedicación = "Baja";
        } else if ($horas >= 3 && $horas <= 6) {
            $dedicación = "Media";
        } else {
            $dedicación = "Alta";
        }
        if ($existe) {
            echo "<p>Nombre: $nombre $apellidos</p>";
            echo "<p>Curso: $curso</p>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Alumno $alumno</p>";
            echo "<p>Horas: $horas</p>";
            echo "<p>Dedicación: $dedicación</p>";
            if ($dedicación === "baja") {
                echo "<p>Puedes realizar un curso de iniciación</p>";
            } elseif ($dedicación === "media") {
                echo "<p>Puedes realizar un curso intermedio</p>";
            } else {
                echo "<p>Puedes realizar un curso avanzado</p>";
            }
        } else {
            echo "<p>Este curso no existe.</p>";
        }
    }
    ?>
</body>

</html>