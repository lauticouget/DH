<?php 

function validar($datos){

    if (trim($datos['username'])== ""){
        $errores['username']= "Debes ingresar nombre de usuario.";
    }
    if(trim($datos['password'])==""){
        $errores['pass']="Debes ingresar tu contaseña.";
    }
    if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "El correo especificado no es correcto.";
    }

return $errores;




}



























?>