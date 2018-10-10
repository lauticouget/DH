<?php

$funcionesejecutadas=0;  /* NO ME SALIO */                    
include ("funciones.php");
include ("superficie.php");



function superficiemayor ($radio1, $radio2, $radio3=""){
    if ($radio3 ==""){
        $radio3=null;
    }$superficiemayor= mayor(circulo($radio1),circulo($radio2),circulo($radio3));
    return $superficiemayor;
}

$ejemplo=superficiemayor(4,9,12);
$string="Me encanta php, a mí también me encanta php.";
$stringpos=strpos($string, "php");

echo"$stringpos";







?>