<?php
/*
Objetivo: Calcular el sueldo semanal de un trabajador considerando horas normales y extras.
// Datos de entrada: Horas trabajadas en la semana (real)
// Proceso: Establecer valores (hora normal: 4,000 pesos, límite: 40 horas), determinar si hay horas extras, calcular sueldo total
// Datos de salida: Total de horas trabajadas, desglose de horas y sueldo total
*/
$HorasTrabajadas = 240;
$HorasNormales;
$PagoHoraNormal;
$TotalPago;
$HorasExtras;

$PagoHoraNormal = 4000;
$HorasNormales = 40;

echo "Calculo de sueldo semana con horas extras";
echo "--------------------";
echo "Ingrese el numero de horas trabajadas a la semana ".$HorasTrabajadas;
echo "----------------------";

if ($HorasTrabajadas <= $HorasNormales){
	/*No hay horas extras*/
	$TotalPago = ($HorasTrabajadas*$PagoHoraNormal);
	echo "Total de horas trabajadas: ".$HorasTrabajadas;
	echo "-----------------------";
	echo "No hay horas extras";
	echo "------------------------";
	echo "Sueldo total $ ".$TotalPago;
	echo "------------------------";
	}
	else {/*Calcular horas extras (se pagan al doble)*/
	
	$HorasExtras = ($HorasTrabajadas-$HorasNormales);
	$TotalPago = ($HorasNormales*$PagoHoraNormal)+($HorasExtras*$PagoHoraNormal*2);

	echo "Total de horas trabajadas: ".$HorasTrabajadas;
	echo "-------------------------";
	echo "Horas normales: ".$HorasNormales. " $ " .$PagoHoraNormal. " por hora";
	echo "-------------------------";
	echo "Horas extras " .$HorasExtras. " $ " .($PagoHoraNormal*2). " Por Hora" ;
	echo "---------------------------";
	echo "Sueldo total: $ " .$TotalPago;
}



?>
