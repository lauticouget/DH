<?php

function triangulo($var1, $var2) {
    return $var1 * $var2 / 2;
}

function rectangulo($var1, $var2) {
    if ($var1 != $var2) {
        return $var1*$var2;
    } else {
        return "Eso es un cuadrado.";
    }
}

function cuadrado($var1) {
    return $var1**2;
}

function circulo($var1) {
    return round(pi() * $var1 ** 2, 2);
}

echo "Superficie del triangulo: " . triangulo(3,5);
echo "<br/>";
echo "Superficie del rectangulo: " . rectangulo(2,3);
echo "<br/>";
echo "Superficie del cuadrado: " . cuadrado(2);
echo "<br/>";
echo "Superficie del círculo: " . circulo(2);
 ?>
