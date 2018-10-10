<?php

function validar($datos){
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


?>

























