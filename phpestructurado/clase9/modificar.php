<?php
session_start();
if($_POST){
    if((isset($_POST['reiniciar'])) || !isset($_SESSION['contador'] )){
        $_SESSION['contador']=0;    
    }
    if(isset($_POST['incrementar'])){
        $_SESSION['contador']++;
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
    <form action="" method="post">
        <input type="submit" name="reiniciar" value="reiniciar" >
        <input type="submit" name="incrementar" value="incrementar">
    </form>
    
</html>
</body>