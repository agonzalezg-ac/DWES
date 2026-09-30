<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    function color()
    {
        $colores = ["rojo", "verde", "azul", "amarillo"];
        foreach ($colores as $color) {
            echo $color . "<br>";
        }
    }
    function nombres()
    {
        $nombres = ["Ana", "Luis", "Pedro", "Marta", "Juan"];
        foreach ($nombres as $nombre) {
            echo "Hola " . $nombre . "<br>";
        }
    }
    function notas()
    {
        $notas = [7, 4, 9, 6, 3, 8];
        foreach ($notas as $nota) {
            if($nota >=5){
            echo $nota . "-> Aprobado"."<br>";
            }else{
                echo $nota . "-> Suspenso"."<br>";
            }
        }
    }
    color();
    nombres();
    notas();
    ?>

</body>

</html>