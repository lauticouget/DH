<?php
                            // EJERCICIO 1 y 2

/*     $aleatorio=rand(0,100);
    for ($i=1;$i<=$aleatorio;$i++){
        echo"$i.\n<br>";
        echo "";
    }
 */

                            // EJERCICIO 3

/*  for ($i=1;$i<=10;$i++){
    $valor=2*$i;
    echo"2 x $i = $valor<br>";
 } */

                            // EJERCICIO 4

/* $i=100;
while($i>=85){
    echo"$i<br>";
    $i--;

} */

                            // EJERCICIO 5

/* $contador=0;
while($contador<5){
    $contador++;
    echo"$contador<br>";
}
 */

                            // EJERCICIO 6



$cara=1;
$carastiradas=0;
$vecestiradas=0;

while($carastiradas<5){

    if (rand(0,1)==$cara){
        $carastiradas++;
        $vecestiradas++;
    }else{
        $vecestiradas++;
    }
    echo "$vecestiradas";
}

                            // EJERCICIO 7
/* $tiros=0;
do{
    $tiros++;
    $monedatirada=rand(0,1);
}while($monedatirada!=1);
echo"$tiros";
 */
                            // EJERCICIO 8
$nombres=["matias", "alejandro", "jose", "ramiro", "lucas"];

/* foreach ($nombres as $nombre){
    echo"$nombre<br>";
}
 */
// -----------------------------
/* for($i=0;$i<count($nombres);$i++){
    echo"$nombres[$i]<br>";
}
 */
// ----------------------------
/* $i=0;
while($i<count($nombres)){
    echo "$nombres[$i]<br>";
    $i++;
    
} */
// ----------------------------
/* $i=0;
do{
    echo"$nombres[$i]<br>";
    $i++;
}while(
    $i<count($nombres)
    ) */
// ----------------------------


                            // EJERCICIO 9
$array=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];

/* for($i=0;$i<count($array);$i++){
    if ($array[$i]==5){
        break;
    }
    echo"$array[$i]<br>";
} */
// ----------------------------------------
/* $i=0;
while($array[$i]!=5){
    echo"$array[$i]<br>";
    $i++;
    if($i>9){
        break;
    }
} */
// ----------------------------------------
/* $i=0;
do{
    echo"$array[$i]<br>";
    $i++;
    if($i>9){
        break;
    }
}while($array[$i]!=5) */
// ---------------------------------------
                            // EJERCICIO 10






?>
