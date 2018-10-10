<?php
if($_POST){
    
    setcookie("coloractual", $_POST['colores']);
    header('location: colores.php');
}


var_dump($_COOKIE['coloractual']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body <?php if (isset($_COOKIE['coloractual'])){
?>style="background-color: <?= $_COOKIE['coloractual']?><?php } ?> ">

    

    <form action="" method="post">
        <select name="colores" id="">
            <option >nada</option>
            <option value="red">rojo</option>
            <option value="green">verde</option>
            <option value="yellow">amarillo</option>
        </select> 
        <input type="submit" name="submit">
    </form>
    
</html>
</body>














        






