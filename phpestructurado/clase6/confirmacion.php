<?php
if (!$_POST[null]){
    header('location: registro_usuarios.php');
}
$nombreCompleto=trim ( $_POST['name']);
$edad = trim( $_POST['edad']);
$email= $_POST['email'];





echo" Muchas Gracias por registrarte $nombreCompleto, nos has dicho que tienes $edad años .
Hemos registrado tu email: $email.";





































?>