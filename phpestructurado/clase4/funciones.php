<?php
function numeromagico(){

    global $funcionesejecutadas;

    $numeromagico=rand(7,9);
    return $numeromagico;
}
function mayor($num1,$num2,$num3 = ""){

    global $funcionesejecutadas;

    if($num3== ""){
        $num3= numeromagico();
    }
    
    if($num1>$num2 && $num1>$num3){
        return $num1;
    }
    if($num2>$num1 && $num2>$num3){
        return $num2;
    }
    if($num3>$num2 && $num3>$num1){
        return $num3;
    }
}
// $numeromayor= mayor(1,2);
// echo"$numeromayor\n\n";



function tabla($base, $limite=""){

    global $funcionesejecutadas;

    if ($limite==""){
        $limite=numeromagico();
    }
    for($i=$base;$i<=$limite;$i++){
        $secuencia[]=$i;
    }
    return $secuencia;
}
// $demostracion=tabla(1);
// var_dump($demostracion);












































?>