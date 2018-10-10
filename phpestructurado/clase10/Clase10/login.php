<?php
include_once('funciones.php');

if($_POST)
{
// 1) Buscar usuario por mail
$usuario=buscamePorEmail($_POST['email']);
if ($usuario !== null){
    if (password_verify($_POST['password'], $usuario['password'])===true)
        {
            login($usuario['email']);
        }
    }
}

?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Validaciones PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <style>
            body {
                padding: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        
            <?php include_once('navbar.php'); ?>

            <form class="form form-group row col-5" action="" method="post">
                <div class="form-group">
                    <label for="mail">E-Mail: </label>
                    <input type="email" name="email" id="mail" value="">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" value="">
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Ingresar</button>
                </div>
            </form>
        </div>
    </body>
</html>