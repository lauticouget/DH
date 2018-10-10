<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Clase 1</title>
</head>
<body>
    <h1>Peliculas</h1>
    <?php foreach($peliculas as $pelicula): ?>
        <a> <?= $pelicula['title'] ?>
        </a>
        <br>

    <?php endforeach; ?>
    <hr>
    <h1>Generos</h1>
    <?php foreach($generos as $genero): ?>
        <a> <?= $genero['name'] ?>
        </a>
        <br>
    <?php endforeach; ?>
    <hr>


    <?php foreach($peliporid as $peli): ?>

    <a><?= $peli['title'] ?> </a>

    <?php endforeach; ?>
</body>
</html>