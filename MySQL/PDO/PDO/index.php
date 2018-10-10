<?php

// Config para el modo de muestra de errores
// setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Escribir codigo a partir de esta linea


require 'DB/connector.php';
require 'DB/QueryBuilder.php';

$pdo= Connector::make();

$queryBuilder=new QueryBuilder($pdo);


$peliculas=$queryBuilder->index('movies');
$generos=$queryBuilder->index('genres');
$peliporid=$queryBuilder->searchId('movies', 8);


//phpinfo ();
//exit;






// No escribir codigo debajo de esta linea
require 'views/index.view.php';