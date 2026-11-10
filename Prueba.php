<?php

$nombre = "TravelGo";
$precio = 85000;

if ($precio > 50000) { echo "Precio alto"; }

$destinos = ["Costa Rica", "Panamá", "México"];

foreach ($destinos as $d) { echo "<li>$d</li>"; }

?>