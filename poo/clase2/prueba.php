<?php 
include('usuario.php');


$usuario=new usuario('lautaro' , 'laucha@gmail.com' , 'lauti123');
$usuario2=new usuario('juan', 'juansito@gmail.com', 'juan123');

var_dump($usuario);

echo"<br>";

var_dump($usuario2);

echo"<br>";

echo $usuario->getEmail();

$usuario->setPas('toronja');
var_dump($usuario);

echo"<br>";

$usuario2->setNombre('Claudio');
var_dump($usuario2)
?>