<?php
/*
// Objetivo: Determinar el cobro a aplicar por uso de estacionamiento basado en horas.
// Datos de entrada: Horas de uso del estacionamiento (número real)
// Proceso: Establecer tarifa por hora (3,500 pesos), solicitar horas, calcular costo total (horas × tarifa)
// Datos de salida: Costo total a pagar (número real)
*/
$HorasEstacionamiento = 50;
$TarifaPorHora;
$Total;

$TarifaPorHora = 3500;

echo "Calculo de cobro de estacionamiento";
echo "-------------------";
echo "Ingrese el numero de horas de estacionamiento: " .$HorasEstacionamiento;

$Total = ($HorasEstacionamiento*$TarifaPorHora);
echo "-------------------";
echo "El total a pagar es: $" .$Total. " pesos";

?>
