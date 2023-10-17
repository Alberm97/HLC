<!--Escribe un programa que cada vez que se ejecute muestre dos números entre 1 y 10 al azar, e indique:
    - La suma de dichos números
    - La multiplicación de dichos números.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Números Aleatorios</title>
</head>
<body>
    <?php
        // Genera dos números aleatorios entre 1 y 10
        $numero1 = rand(1, 10);
        $numero2 = rand(1, 10);

        // Calcula la suma y la multiplicación de los números
        $suma = $numero1 + $numero2;
        $multiplicacion = $numero1 * $numero2;

        // Muestra los números generados, la suma y la multiplicación
        echo '<p>Número 1: ' . $numero1 . '</p>';
        echo '<p>Número 2: ' . $numero2 . '</p>';
        echo '<p>Suma: ' . $suma . '</p>';
        echo '<p>Multiplicación: ' . $multiplicacion . '</p>';
    ?>
</body>
</html>