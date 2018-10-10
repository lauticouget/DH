<?php

// Config para el modo de muestra de errores
// setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Escribir codigo a partir de esta linea


// variables de config
$host = "localhost";
$dbname = "movies_db";
$port = "3306";
$user = "root";
$pass = "root";

$dsn = "mysql:host=$host;dbname=$dbname;port=$port";
// para mamp;
// $dsn = 'mysql:host=127.0.0.1;dbname=movies_db;port=8889';
//$opt = [ PDO::ATTR_ERRMODE
// => PDO::ERRMODE_EXCEPTION ];
try{
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
   echo $e->getMessage();
}


$traerPeliculas = "SELECT * FROM movies";

$query = $db->query($traerPeliculas);

$db2 = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($db2);



//phpinfo ();
//exit;