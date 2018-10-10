<?php
$funcionesEjecutadas = 0;

include("funciones.php");
include("superficie.php");
echo "<br/><br/>";
echo "triangulo: " . triangulo(2, 4) . " " . $funcionesEjecutadas;
echo "<br/><br/>";
function circulos($var1, $var2, $var3) {
    return mayor(circulo($var1), circulo($var2), circulo($var3));
}

echo circulos(7,2,5);
 ?>
