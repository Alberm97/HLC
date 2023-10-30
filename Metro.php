<html>
    <head></head>
    <body>
<?php
$datos_metro = array(
    "Linea1" => array(
        "Longitud" => 20.5,  // Longitud de la línea en kilómetros
        "MaxTrenes" => 30,  // Máximo número de trenes soportados por la línea
        "Paradas" => array(
            array(
                "Nombre" => "Pinar de Chamartín",
                "PersonasSubieron" => 500,
                "PersonasBajaron" => 200,
                "Transbordo" => "Linea2"
            ),
            array(
                "Nombre" => "Bambú",
                "PersonasSubieron" => 300,
                "PersonasBajaron" => 100,
                "Transbordo" => "Linea3"
            ),
            
        )
    ),
    "Linea2" => array(
        "Longitud" => 15.2,
        "MaxTrenes" => 25,
        "Paradas" => array(
            array(
                "Nombre" => "Las rosas",
                "PersonasSubieron" => 400,
                "PersonasBajaron" => 150,
                "Transbordo" => "Linea1"
            ),
            array(
                "Nombre" => "Avenida de Guadalajara",
                "PersonasSubieron" => 250,
                "PersonasBajaron" => 120,
                "Transbordo" => "Linea3"
            ),
           
        )
    ),
    "Linea3" => array(
        "Longitud" => 15.2,
        "MaxTrenes" => 25,
        "Paradas" => array(
            array(
                "Nombre" => "Villaverde Alto",
                "PersonasSubieron" => 400,
                "PersonasBajaron" => 150,
                "Transbordo" => "Linea1"
            ),
            array(
                "Nombre" => "San Cristóbal",
                "PersonasSubieron" => 250,
                "PersonasBajaron" => 120,
                "Transbordo" => "Linea2"
            ),
        )
    ),
);

print_r("Mostrar el máximo número de trenes soportados por la tercera línea.");

$maxTrenesTerceraLinea = $datos_metro["Linea3"]["MaxTrenes"];
echo "Máximo número de trenes soportados por la tercera línea: $maxTrenesTerceraLinea";

print_r("Mostrar el nombre de la tercera parada de la primera línea.");



print_r("A partir de una línea de metro al azar obtener un array con los nombres de las paradas y el número total de viajeros que han hecho uso de la misma (subido o bajado en esa parada).");

$lineaAzar = array_rand($datos_metro);
$paradasLineaAzar = $datos_metro[$lineaAzar]["Paradas"];

$resultadosLineaAzar = array();
foreach ($paradasLineaAzar as $parada) {
    $nombreParada = $parada["Nombre"];
    $totalViajeros = $parada["PersonasSubieron"] + $parada["PersonasBajaron"];
    $resultadosLineaAzar[] = array("Nombre" => $nombreParada, "TotalViajeros" => $totalViajeros);
}

echo "Información de paradas y total de viajeros en la línea al azar: ";
print_r($resultadosLineaAzar);

print_r("Ordenar el array anterior por números de pasajeros.");

usort($resultadosLineaAzar, function ($a, $b) {
    return $b["TotalViajeros"] - $a["TotalViajeros"];
});

echo "Información de paradas y total de viajeros ordenada por número de pasajeros: ";
print_r($resultadosLineaAzar);

print_r ("Contar el número de paradas de todas las líneas del metro que hacen transbordo con otra línea.");

$contadorTransbordos = 0;

foreach ($datos_metro as $linea) {
    foreach ($linea["Paradas"] as $parada) {
        if (isset($parada["Transbordo"])) {
            $contadorTransbordos++;
        }
    }
}

print_r("Número de paradas de todas las líneas que hacen transbordo: $contadorTransbordos");

?>
</body>
</html>
