<?php
/*
// Objetivo: Realizar diferentes operaciones matemáticas con dos números según las condiciones especificadas.
// Datos de entrada: Primer número (real), Segundo número (real)
// Proceso: Solicitar números, determinar operación (multiplicar si son iguales, restar si el primero es mayor, sumar si el segundo es mayor)
// Datos de salida: Resultado de la operación e indicación de la operación realizada
*/
$num1 = 4;
$num2 = 4;
$Resultado;

echo "Operaciones con dos numeros segun condiciones";
echo "Ingrese el primer numero " .$num1;
echo "----------------------------------------------";
echo "Ingrese el segundo numero ".$num2;
echo "----------------------------------------------";

if ($num1 == $num2) {
	/*Si son iguales, multiplicarlos*/
	$Resultado = ($num1*$num2);
	echo "--------------------------------";
	echo "Los numeros son iguales. EL resultado de la multiplicacion es: ".$Resultado;
	
	}
	else if ($num1 > $num2) {
		/*Si el primer es mayor restarlos*/
		$Resultado = ($num1-$num2);
		echo "--------------------------------";
		echo "El primer numero es mayor. El resultado de la resta es: ".$Resultado;
		 
		}
		else {/*Si el segundo es mayor, sumarlos*/
		$Resultado = ($num1+$num2);
		echo "--------------------------------";
		echo "El segundo numero es mayor. El resultado de la suma es ".$Resultado;}
?>
