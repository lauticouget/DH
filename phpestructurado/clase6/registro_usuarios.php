<?php
include_once('felicitaciones.php');
$nombreCompleto="";
$email="";
$edad="";
$contraseña="";
$reContraseña="";
$errores=[];
function recibirDatos($email, $nombre, $edad){

    header('Location: registro_usuarios.php');
   
}

if ($_POST){
    
    if ($errores==[]){
        header('location: felicitaciones.php');
    }

    $nombreCompleto= trim($_POST['name']);
    $email= trim($_POST['email']);
    $edad=trim($_POST['edad']);
    $contraseña=$_POST['password'];
    $reContraseña=$_POST['rePassword'];

    if($nombreCompleto == "" || strlen($nombreCompleto)<5){
        $errores['nombre']= 'Debes Ingresar el Nombre Completo';
    }
    if($email == "" || strlen($email)<5){
        $errores['email']= 'Debes Ingresar el email';
    }
    if($edad == "" || strlen($edad)<5){
        $errores['edad']= 'Debes Ingresar la edad';
    }
    if($contraseña == "" || strlen($contraseña)<5){
        $errores['contraseña']= 'Debes Ingresar la contraseña';
    }
    if($reContraseña != $contraseña){
        $errores['reContraseña']= 'Falló la confirmación de contraseña';
    }
    if(count($errores)== 0){
        recibirDatos($edad, $email, $nombreCompleto);
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
        <fieldset >
            <legend>Registrate</legend>

            <input type='hidden' name='submitted' id='submitted' value='1'/>

            <div class='short_explanation'>* campos requeridos</div>
            

            <div><span class='error'></span></div>
            <div class='container'>
                <label for='name' >Nombre completo: </label><br/>
                <input type='text' name='name' id='name' value='<?php echo $nombreCompleto ;?>' maxlength="50" /> <br/>
                <span id='register_name_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <label for='email' >Email:</label><br/>
                <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                <span id='register_email_errorloc' class='error'></span>
            </div>
            <div class='container' style='height:80px;'>
                <label for='username' >Edad*:</label><br/>
                <input type='text' name='edad' id='username' value='' maxlength="50" /><br/>
                <span id='register_username_errorloc' class='error'></span>
            </div>
            <div class='container' >
                <label for='password' >Contraseña*:</label><br/>
                <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                <input type='password' name='password' id='password' maxlength="50" />
                <div id='register_password_errorloc' class='error' style='clear:both'></div>
            </div>
            <div class='container' style='height:80px;'>
                    <label for='password' >Confirmar contraseña*:</label><br/>
                <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                <input type='password' name='rePassword' id='password' maxlength="50" />
                <div id='register_password_errorloc' class='error' style='clear:both'></div>
            </div> 
            
            <div class='container'>
                <input type='submit' name='Submit' value='Enviar' />
            </div>

        </fieldset>
    </form>
</body>
</html>






























