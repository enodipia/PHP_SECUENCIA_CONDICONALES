<?php
/*
// Objetivo: Determinar el costo de una llamada telefónica basado en su duración.
// Datos de entrada: Duración de la llamada (minutos), Costo por minuto (pesos)
// Proceso: Solicitar duración y costo por minuto, calcular costo total (duración × costo/minuto)
// Datos de salida: Costo total de la llamada (pesos)
*/
$DuracionMinutos = 25;
$CostoPorMinuto  = 250;
$TotalLlamada;

echo "Calculo del costo por de llamada telefonica";
echo "-----------------------------------------";
echo "Ingrese la duracion de la llamada en minutos " .$DuracionMinutos;
echo "-----------------------------------------";
echo "Ingrese el costo por minuto en pesos " .$CostoPorMinuto;

$TotalLlamada = ($DuracionMinutos*$CostoPorMinuto);
echo "-----------------------------------------";
echo "El costo total de la llamada es: $ ".$TotalLlamada. " Pesos";

?>

