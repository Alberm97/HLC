<!-- Crea un array de claves de países con la siguiente información de cada país:
    - Capital
    - Población aproximada
    - Idiomas principales de ese país
    - ¿Si tiene costa?
-->

<?php
// Array de países con información
$paises = array(
    "España" => array(
        "Capital" => "Madrid",
        "Población" => "46.94 millones",
        "Idiomas" => array("Español"),
        "TieneCosta" => true
    ),
    "Francia" => array(
        "Capital" => "París",
        "Población" => "67.02 millones",
        "Idiomas" => array("Francés"),
        "TieneCosta" => true
    ),
    "Alemania" => array(
        "Capital" => "Berlín",
        "Población" => "83.02 millones",
        "Idiomas" => array("Alemán"),
        "TieneCosta" => true
    ),
    "Italia" => array(
        "Capital" => "Roma",
        "Población" => "60.36 millones",
        "Idiomas" => array("Italiano"),
        "TieneCosta" => true
    ),
    "Japón" => array(
        "Capital" => "Tokio",
        "Población" => "126.5 millones",
        "Idiomas" => array("Japonés"),
        "TieneCosta" => true
    )
);

// Ejemplo de cómo acceder a la información de un país
$nombrePais = "Japón";
echo "País: " . $nombrePais . "<br>";
echo "Capital: " . $paises[$nombrePais]["Capital"] . "<br>";
echo "Población: " . $paises[$nombrePais]["Población"] . "<br>";
echo "Idiomas: " . implode(", ", $paises[$nombrePais]["Idiomas"]) . "<br>";
echo "¿Tiene costa?: " . ($paises[$nombrePais]["TieneCosta"] ? "Sí" : "No") . "<br>";
?>