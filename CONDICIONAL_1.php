<?php
/*
Objetivo: Calcular el total a pagar por la compra de camisas aplicando distintos descuentos según la cantidad.
// Datos de entrada: Cantidad de camisas (entero), Precio unitario de cada camisa (real)
// Proceso: Solicitar datos, calcular subtotal, determinar y aplicar descuento (20% si cantidad >= 3, 10% si cantidad < 3)
// Datos de salida: Subtotal, descuento aplicado y total a pagar
*/
$CantidadCamisas = 2;
$PrecioCamisa = 10000;
$TotalSinDescuento;
$Descuento;
$TotalPagar;

echo "Calculo del total a pagar por compra de camisas";
echo "--------------------------------------";
echo "Ingrese la cantidad de camisas a comprar ".$CantidadCamisas;
echo "--------------------------------------";
echo "Ingrese el precio de cada camisa ".$PrecioCamisa;
echo "--------------------------------------";

$TotalSinDescuento = ($CantidadCamisas*$PrecioCamisa);

if ($CantidadCamisas >= 3)  {
	/*Descuento del 20% para 3 o mas camisas*/
	$Descuento = ($TotalSinDescuento*0.20);
	} else /*Descuento del 10% para menos de 3 camisas*/
	$Descuento = ($TotalSinDescuento*0.10); 
	
	$TotalPagar = ($TotalSinDescuento-$Descuento);
	
echo "Subtotal $ ".$TotalSinDescuento;
echo "--------------------------------------";
echo "Descuento aplicado $ ".$Descuento;
echo "--------------------------------------";
echo "Total a pagar: $ ".$TotalPagar." Pesos";

?>
