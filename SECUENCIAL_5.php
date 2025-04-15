<?php
/*
Objetivo: Determinar el costo de un boleto de viaje basado en la distancia a recorrer.
// Datos de entrada: Kilómetros a recorrer (número real)
// Proceso: Establecer costo por kilómetro (900 pesos), solicitar distancia, calcular costo total (km × costo/km)
// Datos de salida: Costo total del boleto (número real)
*/
$KilometrosRecorrido = 40;
$CostoPorKilometro = 900;
$TotalBoleto;


echo "Calculo del costo de boleto - La curva loca ";
echo "----------------------------------";
echo "Inrese la distancia en kilometros del recorrido: " .$KilometrosRecorrido;
echo "----------------------------------";
$TotalBoleto = ($KilometrosRecorrido*$CostoPorKilometro);
echo "El costo del boleto es: $" .$TotalBoleto. " Pesos";
	
?>
