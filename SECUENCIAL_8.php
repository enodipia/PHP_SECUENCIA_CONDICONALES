<?php
// Objetivo: Calcular el valor a pagar por la factura de servicios públicos.
// Datos de entrada: Consumo de energía (kilovatios), Consumo de agua (metros cúbicos)
// Proceso: Establecer tarifas y costos, solicitar consumos, calcular costo total (sumar todos los cargos y restar subsidio)
// Datos de salida: Detalle de la factura y valor total a pagar

$CargoBasico = 36000;
$CostoKilovatio = 500;
$ConsumoEnergia = 40;
$CostoEnergia;
$CostoM3Agua = 10500;
$ConsumoAgua = 110;
$CostoAgua;
$CostoAseoAlcantarillado = 28000;
$SubsidioCliente = 3870;
$TotalFactura;

echo "Calculo de factura servicios emcali";
echo "Ingrese el consumo de energia en kilovatios " .$ConsumoEnergia;
echo "--------------------------------------------";
echo "Ingrese el consumo de agua en metros cubicos " .$ConsumoAgua;
echo "--------------------------------------------";

$CostoEnergia = ($ConsumoEnergia*$CostoKilovatio);

$CostoAgua =($ConsumoAgua*$CostoM3Agua);

$TotalFactura =($CargoBasico+$CostoEnergia+$CostoAgua+$CostoAseoAlcantarillado-$SubsidioCliente);

echo "Total a pagar: $" .$TotalFactura. " Pesos";
?>

