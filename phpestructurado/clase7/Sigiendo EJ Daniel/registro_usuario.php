<?php
header('content-type: text/html; charset=utf-8');
include_once('funciones.php');


$nombre="";
$edad="";
$email="";
$usuario=[];

if($_POST){
    $errores=validar($_POST);
    
    if($errores==[]){
        $user=createuser($_POST);
        saveuser($user);
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
        <input type="text" name="nombre" placeholder="Nombre Apellido" value="<?=valor("nombre")?>" > 
        <?php if(isset($errores["nombre"])){?>
        <span>
        <?php echo"<br>".$errores["nombre"]?>
        </span>
        <?php }?>
        <br>
        <br>
        <label >Edad</label>
        <br>
        <input type="text" placeholder="Ej: 32" name="edad" value=<?=valor("edad")?>> 
        <?php if(isset($errores["edad"])){?>
        <span>
        <?php echo"<br>".$errores["edad"]?>
        </span>
        <?php }?>
        <br>
        <br>
        <label >Email</label>
        <br>
        <input type="text" placeholder="ejemplo@ejemplo.com.ar" name="email" value="<?=valor("email")?>"    >
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




























