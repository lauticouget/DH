<?php
function valor($user_input) 
{
    if (isset($_POST["$user_input"])) {
        return $_POST["$user_input"];
    }
}

function validar($datos){
    $errores=[];
    if(trim($datos['nombre'])==""){
        $errores['nombre']="Debes Ingresar tu nombre.";
    }
    if(!is_numeric($datos['edad'])){
        $errores['edad']='Debes Ingresar tu edad con un número.';
    }
    if(!filter_var($datos['email'],FILTER_VALIDATE_EMAIL)){
        $errores['email']='Los datos Ingresados como casilla de correo son erroneos.';
    }
    return $errores;
}
function generarid(){
    $file=file_get_contents('usuarios.json');
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

function createuser($post){
    $usuario=[
        'nombre'=>$post['nombre'],
        'edad'=> $post['edad'],
        'email'=>$post['email']
        
    ];
    $usuario["id"]= generarid();
    return $usuario;
}
function saveuser($user){
    $jsonUser=json_encode($user);
    file_put_contents('usuarios.json', $jsonUser . PHP_EOL, FILE_APPEND);
}
?>

























