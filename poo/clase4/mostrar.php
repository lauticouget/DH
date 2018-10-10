<?php
include_once('cliente.php');
include_once('persona.php');
include_once('pyme.php');
include_once('multinacional.php');



$persona = new persona('lauti', 'couget', 12123123, '19/13/31', 'algo@hotmail.com.ar', 'asfhas123');
var_dump($persona);


?>