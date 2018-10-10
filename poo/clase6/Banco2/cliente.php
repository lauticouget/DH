<?php


require_once(realpath('interfaces/imprimible.php'));

abstract Class Cliente implements \interfaces\Imprimible{
  
  private $email;
  private $pass;
  private $cuenta;

  public function __construct($email,$pass, \cuentas\Cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  } 

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setPass($pass){
    $this->pass = $pass;
  }

  public function getPass(){
    return $this->pass;
  }

  public function getCuenta() {
    return $this->cuenta;
  }

  abstract public function cobrarServicio();

}
