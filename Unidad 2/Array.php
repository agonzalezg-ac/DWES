<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    function telefonos()
    {
        $telefonos = [
            "Ana" => "600123456",
            "Luis" => "611234567",
            "Marta" => "622345678",
            "Carlos" => "633456789"
        ];
        foreach ($telefonos as $persona => $telefono) {
            echo $persona . " => " . $telefono . "<br>";
        }
    }
    function notas()
    {
        $notas = [
            "Ana" => 8.5,
            "Luis" => 4.2,
            "Marta" => 6.7,
            "Carlos" => 3.8,
            "Laura" => 9.1
        ];
        $contadorA;
        $contadorS;
        $contadorP;
        $suma;
        foreach ($notas as $persona => $nota) {
            global $contadorA;
            global $contadorS;
            global $contadorP;
            global $suma;
            if ($nota >= 5) {
                echo $persona . " => " . $nota . " esta aprobado <br>";
                $contadorA++;
            } else {
                echo $persona . " => " . $nota . " esta suspenso <br>";
                $contadorS++;
            }
            $contadorP++;
            $suma += $nota;
        }
        $media = $suma / $contadorP;
        echo "Numero total de alumnos: " . $contadorP . "<br>";
        echo "Numero de aprobados: " . $contadorA . "<br>";
        echo "Numero de suspensos: " . $contadorS . "<br>";
        echo "Nota media: " . $media . "<br>";
    }
    function inventario()
    {
        $productos = [
            "Teclado" => 15,
            "Ratón" => 7,
            "Monitor" => 4,
            "Webcam" => 12,
            "Auriculares" => 3,
            "Impresora" => 8
        ];
        $masU = 0;
        $menosU = 100;
        $productomasU = "";
        $productomenosU = "";
        $sumaU = 0;
        $sumaP = 0;
        foreach ($productos as $producto => $unidades) {
            if ($unidades < 5) {
                echo $producto . " => " . $unidades . " ¡Stock bajo! <br>";
            } else {
                echo $producto . " => " . $unidades . "<br>";
            }
            $sumaP++;
            $sumaU += $unidades;
            if ($masU < $unidades) {
                $masU = $unidades;
                $productomasU = $producto;
            }
            if ($menosU > $unidades) {
                $menosU = $unidades;
                $productomenosU = $producto;
            }
        }
        echo "Numero total de productos diferentes: " . $sumaP . "<br>";
        echo "Numero total de unidades: " . $sumaU . "<br>";
        echo "El producto con mas unidades es: " . $productomasU . " que tiene " . $masU . " unidades<br>";
        echo "El producto con menos unidades es: " . $productomenosU . " que tiene " . $menosU . " unidades<br>";
    }
    function ventas()
    {
        $informe = [
            "Ana" => 3250,
            "Luis" => 1850,
            "Marta" => 4720,
            "Carlos" => 2900,
            "Laura" => 5100,
            "Pedro" => 2150
        ];
        $sumaV = 0;
        $sumaC = 0;
        $masV = 0;
        $menosV = 1000000000;
        $comercialMas = "";
        $comercialMenos = "";
        $cat1 = 0;
        $cat2 = 0;
        $cat3 = 0;
        $cat4 = 0;
        foreach ($informe as $comercial => $ventas) {
            if ($ventas < 2000) {
                $cat1++;
            } else if ($ventas < 3000) {
                $cat2++;
            } else if ($ventas < 4500) {
                $cat3++;
            } else {
                $cat4++;
            }
            $sumaC++;
            $sumaV += $ventas;
            if ($masV < $ventas) {
                $masV = $ventas;
                $comercialMas = $comercial;
            }
            if ($menosV > $ventas) {
                $menosV = $ventas;
                $comercialMenos = $comercial;
            }
        }
        $media = $sumaV / $sumaC;
        $sumaCS = $cat3 + $cat4;
        echo "Total de ventas: " . $sumaV . "<br>";
        echo "Media de ventas por comercial: " . $media . "<br>";
        echo "Numero de comerciales: " . $sumaC . "<br>";
        echo "Numero de comerciales con ventas superiores a 3000: " . $sumaCS . "<br>";
        echo "El comercial que mas ha vendido es: " . $comercialMas . " que tiene " . $masV . " ventas<br>";
        echo "El comercial que menos ha vendido es: " . $comercialMenos . " que tiene " . $menosV . " ventas<br>";
        echo "Numero de comerciales en cada categoría: <br>"
            . "Menos de 2000€ ->" . $cat1 . "<br>"
            . "De 2000€ a 2999€ ->" . $cat2 . "<br>"
            . "De 3000€ a 4499€ ->" . $cat3 . "<br>"
            . "Mas de 4500€ ->" . $cat4 . "<br>";
    }
    telefonos();
    notas();
    inventario();
    ventas();
    ?>

</body>

</html>