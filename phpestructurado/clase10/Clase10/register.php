<?php
    include_once('funciones.php');

    if($_POST) {
        // 1) VALIDAR
        $errores=validate($_POST);
        // 2) CREAR USER
        if(count($errores)==0) {
            $usuario=createUser($_POST);
    // 3) GUARDAMOS USUARIO
            saveuser($usuario);
    // 4) REDIRECT
            header('Location: login.php');
            exit;
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

            <?php if(isset($errores)):?>
            <ul>
            <?php foreach($errores as $error): ?>

                <li class="alert alert-danger"><?= $error?></li>

            <?php endforeach;?>
            </ul>
            <?php endif;?>

            <form class="form form-group row col-5 offset-2" style="padding-top: 55px;" action="" method="post">
                <div class="form-group">
                    <label for="nombre">Username: </label>
                    <input type="text" name="username" value="<?= !isset($errores['username'])? old('username'): ""  ?>">
                </div>
                <div class="form-group">
                    <label for="mail">E-Mail: </label>
                    <input type="text" name="email" value="<?= !isset($errores['email'])? old('email'):""?>">
                </div>
                <div class="form-group">
                    <label for="passwd">Password: </label>
                    <input type="password" name="password" value="">
                </div>
                <div class="form-group">
                    <label for="cpasswd">Repetir Password: </label>
                    <input type="password" name="cpassword" value="">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="confirm" value="<?=!isset($errores['confirm']) ? old('confirm') : "" ?>">
                    <label for="confirm">Acepto los terminos y condiciones.</label>
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Registrarme</button>
                </div>
            </form>
        </div>
    </body>
</html>
