<?php
/*
// Objetivo: Determinar el tiempo que tarda una persona en llegar de una ciudad a otra en bicicleta.
// Datos de entrada: Distancia entre las ciudades (km), Velocidad constante (km/h)
// Proceso: Solicitar distancia y velocidad, calcular tiempo (distancia/velocidad)
// Datos de salida: Tiempo de viaje (horas)
*/
$Distancia = 120;
$Velocidad = 43;
$Tiempo;

echo "Calculo del tiempo de viaje en bicicleta";
echo "-----------------------------";
echo "Ingrese la distancia entre ciudades (en kilometros) ".$Distancia ;
echo "-----------------------------------";
echo "Ingrese la velocidad constante en km/h ".$Velocidad;

$Tiempo = round($Distancia/$Velocidad);

echo "El tiempo que tardara en llegar es: ".$Tiempo. " Horas";
?>
