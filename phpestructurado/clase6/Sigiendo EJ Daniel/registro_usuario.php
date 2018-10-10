<?php
header('content-type: text/html; charset=utf-8');
include_once('validaciones.php');

$errores=[];

$nombre="";
$edad="";
$email="";

if($_POST){
    $nombre=($_POST['nombre']);
    $edad=($_POST['edad']);
    $email=($_POST['email']);

    $errores=validar($_POST);
    if($errores==[]){
        header('location: felicitaciones.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method=post>
        <label >Nombre</label>
        <br>
        <input type="text" name="nombre" placeholder="Nombre Apellido" value="<?php echo  $nombre ?>" > 
        <?php if(isset($errores["nombre"])){?>
        <span>
        <?php echo"<br>".$errores["nombre"]?>
        </span>
        <?php }?>
        <br>
        <br>
        <label >Edad</label>
        <br>
        <input type="text" placeholder="Ej: 32" name="edad" value=<?="$edad"?>> 
        <?php if(isset($errores["edad"])){?>
        <span>
        <?php echo"<br>".$errores["edad"]?>
        </span>
        <?php }?>
        <br>
        <br>
        <label >Email</label>
        <br>
        <input type="text" placeholder="ejemplo@ejemplo.com.ar" name="email" value="<?=$email?>"    >
        <?php if(isset($errores["email"])){?>
        <span>
        <?php echo"<br>".$errores["email"]?>
        </span>
        <?php }?>
        <br>
        <hr>
        <input type="submit" value="enviar">
    </form>
</body>
</html>




























