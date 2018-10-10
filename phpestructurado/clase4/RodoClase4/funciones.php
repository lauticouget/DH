<?php
function numeroMagico() {
    return 25;
}

function mayor($num1, $num2, $num3 = "") {
    if ($num3 == "") {
        $num3 = numeroMagico();
    }
    if ($num1 > $num2 && $num1 > $num3) {
        echo "El mayor es: $num1";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "El mayor es: $num2";
    } elseif ($num3 > $num1 && $num3 > $num2) {
        echo "El mayor es: $num3";
    } else {
        echo "Hay 2 o más números iguales.";
    }
}

function tabla($base, $max = "") {
    if ($max == "") {
        $max = numeroMagico();
    }
    echo "<br/><br/>";
    echo "Tabla del " . $base . " hasta " . $max . ": <br/>";
    for($i = $base; $i <= $max; $i++) {
        if ($i % $base == 0) {
            $array[] = $i;
        }
    }
    return $array;
}




echo mayor(15,5);

var_dump(tabla(3));

echo "<br/><br/>";
echo "Número mágico: " . numeroMagico();
 ?>
