<?php

function hobbyValido($string){
    if(strlen($string)>= 3  &&   strlen($string)<= 15){
        return true;
    }else{
        return false;
    }
}
system('clear');

echo"Hola mundo \n";

$nombre=readline("Ingrese su nombre: \n");
echo"\n Bienvenido $nombre \n\n";






$edad=readline("Ingrese su edad:");

if($edad<18){
    echo"\nUsted no está autorizado en el sistema\n\n";
    exit;
}else{
    echo "\n autorizacion exitosa \n\n";
}
$hobbies=readline("Ingresa tus hobbis separados por comas:\n");

$hobbiesarray=explode(", ",$hobbies);

foreach ($hobbiesarray as $hobbie){
    if(hobbyValido($hobbie)==true){
        if (readline("Usted confirma que le gusta el/la $hobbie: (si, no)" )=="si"){
            $hobbiesvalidados[]= $hobbie;
        }
    }
}
$listahobbiesok= implode(", ", $hobbiesvalidados);

echo"\nNombre: $nombre\n";
echo"Edad: $edad\n";
echo"Hobbies: $listahobbiesok\n";













?>