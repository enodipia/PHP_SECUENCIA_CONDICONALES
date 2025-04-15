<?php
/*
 Objetivo: Calcular el área de un triángulo utilizando la fórmula A = (base * altura) / 2.
 Datos de entrada: Base del triángulo (número real), Altura del triángulo (número real)
 Proceso: Solicitar base y altura, calcular área aplicando la fórmula: área = (base * altura) / 2
 Datos de salida: Área del triángulo número real
*/
$base = 10;
$altura = 20;
$area;

echo "Calculo del area de un triangulo";
echo "--------------------------------";
echo "ingrese la base del triangulo: " .$base;
echo "--------------------------------";
echo "ingrese la altura del triangulo: " .$altura; 
echo "--------------------------------";
$area = ($base*$altura/2);
echo "--------------------------------";
echo "El area del triangulo es: ".$area;
?>
