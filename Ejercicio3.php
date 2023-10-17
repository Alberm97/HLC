<!--Escribe un programa que muestre un número del 0 al 9 al azar y escriba en letras el valor obtenido.-->

<!DOCTYPE html>
<html>
<head>
    <title>Número Aleatorio en Letras</title>
</head>
<body>
    <?php
        // Genera un número aleatorio entre 0 y 9
        $numero = rand(0, 9);

        // Define un array con las representaciones en letras de los números del 0 al 9
        $numerosEnLetras = array("cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve");

        // Muestra el número en letras
        echo '<p>Número en letras: ' . $numerosEnLetras[$numero] . '</p>';
    ?>
</body>
</html>