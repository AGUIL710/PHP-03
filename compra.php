<?php

// PRODUCTO 1
$precio1 = 30;
$cantidad1 = 4;

// PRODUCTO 2
$precio2 = 23;
$cantidad2 = 2;

// PRODUCTO 3
$precio3 = 40;
$cantidad3 = 5;

// CALCULAAR EL SUBTOTAL
$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

// CALCULAR EL IMPUESTO (16%)

$impuesto = $subtotal * 0.16;

// CALCULAR EL DESCUENTO (10%)

$descuento = $subtotal * 0.10;

// CALCULAR EL TOTAL

$total = $subtotal - $descuento + $impuesto;

echo "El Subtotal de la compra es: $subtotal <br>";
echo "El monto de Impuestos es: $impuesto <br>";
echo "El Descuento aplicado es: $descuento <br>";
echo "El Total Final de la compra ess: $total <br>";
