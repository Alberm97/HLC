<!-- Escribe un array de 8 ciudades de España. Elimina al azar una de ellas y muestre el nuevo array de ciudades. -->

<?php
// Array de ciudades de España
$ciudades = array(
    "Madrid",
    "Barcelona",
    "Valencia",
    "Sevilla",
    "Bilbao",
    "Málaga",
    "Granada",
    "Zaragoza"
);

// Elimina una ciudad al azar
$ciudadEliminada = array_rand($ciudades);
unset($ciudades[$ciudadEliminada]);

// Reorganiza el array para eliminar el espacio vacío
$ciudades = array_values($ciudades);

// Muestra el nuevo array de ciudades
echo "Nuevo array de ciudades:<br>";
foreach ($ciudades as $ciudad) {
    echo $ciudad . "<br>";
}
?>