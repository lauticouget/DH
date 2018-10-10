<?php
function triangulo($base, $altura){

    global $funcionesejecutadas;

    $superficie=$base*($altura/2);
    return $superficie;
}
// $triangulo=triangulo(4,9);
// echo "Supericie del triangulo es: $triangulo\n\n";


function rectangulo($base, $altura){

    global $funcionesejecutadas;

    $superficie=$base * $altura;
    return $superficie;
}
// $rectangulo=rectangulo(5,13);
// echo"Supericie del rectangulo es: $rectangulo\n\n";

function circulo($radio){

    global $funcionesejecutadas;

    $superficie=$radio*pi();
    return $superficie;
}
// $superficie=circulo(90);
// echo"Supericie del circulo es: $superficie\n\n";




































?>