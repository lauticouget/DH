<?php 
$decoded=json_decode(file_get_contents('usuarios.json'), true. PHP_EOL);
var_dump($decoded);



echo "¡Felicitaciones!, te haz registrado correctamente. Aquí están tus datos ingresados: $decoded['nombre'], $decoded['edad'], $decoded['email']. ";

?>