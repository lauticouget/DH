<?php 
class usuario{

private $nombre;
private $email;
private $password;


public function __construct($nombre, $email, $password){
    $this->nombre= $nombre;
    $this->email=$email;
    $this->password=$password;

}
public function getEmail()
{
    return $this->email;
}
public function setPas($password)   
{
    if(strlen($password)<3){
        return false;
    }else{
        $this->password=$password;
    }
}
public function setNombre($nombre)
{
    if($nombre!=string){
        $this->nombre='El nombre debe ser STRING!';
    }else{
        $this->nombre=$nombre;
    }
}

}





?>