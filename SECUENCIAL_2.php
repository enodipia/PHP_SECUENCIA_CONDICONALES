<?php
/*
 Objetivo: Determinar cuántos dólares se pueden adquirir con una cantidad dada de pesos colombianos.
 Datos de entrada: Cantidad de pesos colombianos (número real)
 Proceso: Establecer tasa de cambio (1 dólar = 4,100 pesos), solicitar pesos, calcular conversión (pesos/tasa)
 Datos de salida: Cantidad equivalente en dólares (número real)
*/
$PesosColombianos = 450000;
$Dolares;
$TasaCambio = 4100;

echo "Conversion de pesos colombianos a dolares";
echo "--------------------------------";
echo "Ingrese la cantidad de pesos colombianos ".$PesosColombianos;
echo "--------------------------------";
/*Devuelve */
$Dolares = round($PesosColombianos/$TasaCambio);

echo "El equivalente en dolares es: $" .$Dolares;
?>
