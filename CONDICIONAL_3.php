<?php
/*
// Objetivo: Determinar la cuota a pagar por un seguro según el monto por el que se efectúa.
// Datos de entrada: Monto del seguro (real)
// Proceso: Solicitar monto, determinar porcentaje (5% si monto < 500000, 3% si monto = 500000, 2% si monto > 500000)
// Datos de salida: Monto del seguro, porcentaje aplicado y cuota a pagar
*/

$MontoSeguro = 501000;
$PorcentajeCuota;
$CuotaPagar;

echo "Calculo de cuota de seguro";
echo "------------------------------";
echo "Ingrese el monto del seguro ".$MontoSeguro;
echo "--------------------------";

if ($MontoSeguro <500000) {
	/*Si el monto es menor a 500k, cuota del 5%*/
	$PorcentajeCuota = 0.05;}
	else if ($MontoSeguro == 500000){
		/*Si el monto es igual a 500k, cuota del %3*/
		$PorcentajeCuota = 0.03; }
		else {
			/*Si el monto es mayor a 500k, cuota del 2%*/
			$PorcentajeCuota = 0.02;}
			
			$CuotaPagar = ($MontoSeguro*$PorcentajeCuota);
			
			echo "Monto del seguro: $" .$MontoSeguro;
			echo "------------------";
			echo "Porcentaje de cuota aplicado: ".$PorcentajeCuota*100;
			echo "-------------------";
			echo "Cuota a pagar: $" .$CuotaPagar;
?>
