<?php
/*
 Objetivo: Determinar el costo de un trabajo de pintura basado en la cantidad de metros cuadrados.
 Datos de entrada: Metros cuadrados a pintar (número real)
 Proceso: Establecer precio por metro cuadrado (15,000 pesos), solicitar metros cuadrados, calcular costo total
 Datos de salida: Presupuesto total del trabajo de pintura (número real)

*/
$MetrosCuadrados = 30;
$PrecioMetroCuadrado = 15000;
$Total;
echo "Calculo de presupuesto de pintura - La brocha Gorda ";
echo "-----------------------------------";
echo "Ingrese la cantidad de metros cuadrados a pintar: " .$MetrosCuadrados;

$Total = ($MetrosCuadrados*$PrecioMetroCuadrado);
echo "-----------------------------------";
echo "El presupuestro total es: $" .$Total. " Pesos";
?>
