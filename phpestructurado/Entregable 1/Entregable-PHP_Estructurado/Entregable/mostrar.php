<?php 
    // if($_POST){
    //     var_dump($_POST);
    // }
    $arrayasociativo=[];
$arrayasociativo["nombre"]=$_POST["nombre"];
$arrayasociativo["apellido"]=$_POST["apellido"];
$arrayasociativo["dni"]=$_POST["dni"];
$arrayasociativo["sexo"]=$_POST["sexo"];
$arrayasociativo["cargo"]=$_POST["cargo"];

$sueldoNeto=$_POST["sueldo_bruto"];
$sueldoBruto=$_POST["sueldo_bruto"];
$descuentojubilacion=0;
$descuentoObraSocial=0;
$retencionDeGanancias=0;
function descuentojubilacion(){
    global $descuentojubilacion;
    global $sueldoNeto;
    global $sueldoBruto;
    $descuentojubilacion=$sueldoBruto*0.11;
    return $descuentojubilacion;
    
    

}
function descuentoObraSocial(){
    global $descuentoObraSocial;
    global $sueldoNeto;
    global $sueldoBruto;
    $descuentoObraSocial=$sueldoBruto*0.03;
    return $descuentoObraSocial;
    
    
}
function retencionGanancias(){
    global $retencionDeGanancias;
    global $sueldoNeto;
    $retencionDeGanancias++;
    $sueldoNeto=$sueldoNeto-$sueldoNeto*0.2;
    return$sueldoNeto;
}

if($_POST["sueldo_bruto"]){
    global $sueldoNeto;
    global $descuentojubilacion;
    global $descuentoObraSocial;
    descuentojubilacion();
    descuentoObraSocial();
    $sueldoNeto=$sueldoNeto-$descuentojubilacion;
    $sueldoNeto=$sueldoNeto-$descuentoObraSocial;
    
}
if($sueldoNeto>35000){
    retencionGanancias();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio integrador 1 - Perfil creado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .spacer {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-12 mx-auto">
        <img src="images/perfil.png" alt="profile-pic">
        </div>
        <div class="col-12">
        <?php 
        if($_POST["sexo"]== "masculino"){
            echo"Bienvenido!";
        }else{
            echo"Bienvenida!";
        }
        ?>
        </div>
        <div class="col-12">Nombre: <?php echo"$_POST[nombre]";?></div>
        <div class="col-12">Apellido: <?php echo"$_POST[apellido]";?></div>
        <div class="col-12">DNI: <?php echo"$_POST[dni]";?></div>
        <div class="col-12">sexo: <?php echo"$_POST[sexo]";?></div>
        <div class="col-12">cargo: <?php echo"$_POST[cargo]";?></div>

        <div class="col-12 mx-auto">
        El sueldo Bruto es: 
        <?php echo"$sueldoBruto";?>
        </div>
        <div class="col-12 mx-auto">
        El sueldo Neto es:
        <?php 
        echo"$sueldoNeto";
        if($retencionDeGanancias!=0){
            echo"<br> (Ganancias Descontadas. 20%)";
        }
        ?>

        </div>
        
        
        



    </div>
</body>
</html>