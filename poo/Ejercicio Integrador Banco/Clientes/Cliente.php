<?php

//Defino variables privadas para la clase Cliente

abstract Class Cliente
{
  protected $email;
  protected $pass;
  protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass,cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta =  $cuenta;
  }

function cobrarServicios()
{
  $this->cuenta->cobrarServicios($this);
}




 
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setPass($pass)
  {
    $this->pass = $pass;
  }
  public function getPass()
  {
    return $this->pass;
  }

  public function getCuenta()
  {
    return $this->cuenta;
  }

  
}
