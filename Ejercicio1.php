<!--Escribe un programa que cada vez que se ejecute muestre una línea de longitud entre 10 y 1000 píxeles, al azar.-->

<!DOCTYPE html>
<html>
<head>
    <title>Línea Aleatoria</title>
</head>
<body>
    <?php
        // Genera una longitud aleatoria entre 10 y 1000 píxeles
        $longitud = rand(10, 1000);

        // Genera un color aleatorio en formato hexadecimal (RRGGBB)
        $color = sprintf("#%02x%02x%02x", rand(0, 255), rand(0, 255), rand(0, 255));

        // Muestra la línea en HTML utilizando un elemento "div"
        echo '<div style="width: ' . $longitud . 'px; height: 2px; background-color: ' . $color . ';"></div>';
    ?>
</body>
</html>