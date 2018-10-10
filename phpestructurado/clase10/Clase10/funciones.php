<?php
session_start();

    function dd($var)
    {
        echo"<pre>";
        die(var_dump($var));
        echo "</pre>";
    }

    function old($user_input)
    {
        if (isset($_POST["$user_input"])) {
            return $_POST["$user_input"];
        }
    }

    //////
    

    function validate($datos)
    {
        $errores=[];
        $username=trim($datos['username']);
        $email=trim($datos['email']);
        $password=$datos['password'];
        $cpassword=$datos['cpassword'];

        

        if($username == ""){
            $errores['username'] = "Capo, me dejaste vacio el username.";
        }elseif(strlen($username) <= 3 ) {
            $errores['username'] = "El nombre de usuario debe tener minimo 4 caracteres";
        }

        if($email==""){
            $errores['email'] = "Capo, me dejaste vacio el mail.";
        }else if($email==""){
            $errores['email']="Capo, llename el campo mail con tu email plis.";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email']="Capo, el email no está bien escrito";
        }

        if($datos['password'] == "") {
            $errores['password'] = "LLena la password plis.";
        } elseif (strlen($datos['password']) <= 5) {
            $errores['password'] = "Minimo 6 caracteres para la pass!";
        } elseif ($datos['password'] != $datos['cpassword']) {
            $errores['password'] = "Las contraseñas no coinciden";
        }

        if(!isset($datos['confirm'])){
            $errores['confirm']= "Aceptame los terminos y condicciones.";
        }
        return $errores;
    }

    function createUser($datos)
    {
        $usuario=[
            "username"=> $datos['username'],
            "email" => $datos['email'],
            "password" => password_hash($datos['password'], PASSWORD_DEFAULT)
            
        ];
        $usuario['id']= idGenerate();

        return $usuario;
    }
    function idGenerate(){
        $file=file_get_contents('users.json');
        if ($file==""){
            return 1;
        }
        $users=explode(PHP_EOL, $file);
        array_pop($users);
        // SE HACE ARRAY POP PORQUE PHP_EOL TE DEJA UN RENGLON ABAJO DE MÁS.
    
        $lastuser=$users[count($users)-1];
        /* SE HACE UN COUNT Y -1 PORQUE EL ARRAY $USERS CONTIENE LOS STRING JSON. EL PRIMER STRING ES = AL PRIMER USUARIO. OSEA 1. NO 0. EL ÚLTIMO DE ESTA MANNERA SIEMPRE DEBERÁ TENER -1 PARA TENER SU VALOR REAL, DE OTRA MANERA LA POSICION Q TIENE EN EL ARRAY SERIA UN  NUMERO MÁS BAJO DE EL ID QUE DEBE TENER Y NO QUEREMOS ESO. */
    
        $lastuser=json_decode($lastuser, true);
        // TRANSFORMAMOS EL ULTIMO STRING(JSON) DEL ARRAY $USERS EN UN ARRAY ASOCIATIVO.
    
        return $lastuser["id"]+1;
        /* DEVOLVEMOS EL VALOR DE LA KEY(ID) DEL ARRAY LAST.USER (STRING JSON TRANSFORMADO A ARRAY) Y LE SUMAMOS 1 PARA EL NUEVO USUARIO. */
    }
    function saveUser($usuario){
        $jsonUser=json_encode($usuario);
        file_put_contents('users.json' ,$jsonUser. PHP_EOL, FILE_APPEND);
    }

    
    //1- Traer Toda La Base
   
    
    function traerTodaLaBase()
    {
        $baseJson=file_get_contents('users.json');
        $users=explode(PHP_EOL, $baseJson);
        array_pop($users);

        foreach($users as $user)
        {
            $arrayUsers[]=json_decode($user, true);
        }
        return $arrayUsers;
    }
    // 2- Busqueda por email
    function buscamePorEmail($email)
    {
        $arrayDeUsuariosTraidos = traerTodaLaBase();

        foreach($arrayDeUsuariosTraidos as $user)
        {
            if($user['email']== $email){
                return $user;
            }
        }
        return null;
    }

    function loginController()
    {
        if(isset($_SESSION['email']))
        {
            return true;
        }else{
            if(isset($_COOKIE)){
                if($_SESSION['email']== $_COOKIE['email'])
                {      
                    $_SESSION['email']= $_COOKIE['email'];
                    return true;
                }
            }else{
                return false;
            }
        }
    }
    function login($usuario)
    {
        $_SESSION['email']= $usuario;
        setcookie($usuario, $usuario, time()+3600 , '/');
        header('location: perfil.php');
    }
    function logout(){
        session_start();
        session_destroy();  
        setcookie("email","", time()-1);
    }

