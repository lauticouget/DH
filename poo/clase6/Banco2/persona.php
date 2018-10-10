<?php

require_once('cliente.php');

Class Persona extends Cliente {
	private $nombre;
	private $apellido;
	private $documento;
	private $nacimiento;
  
  public function __construct($nombre,$apellido,$documento,$nacimiento, $email, $pass, $cuenta){
  	parent::__construct($email, $pass, $cuenta);
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }

  public function cobrarServicio() {
    if ($this->getCuenta() instanceOf \cuentas\Classic) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 100
      );
    } else if ($this->getCuenta() instanceOf \cuentas\Gold) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 
        5 * strlen($this->getApellido())
      );
    } else if ($this->getCuenta() instanceOf \cuentas\Platinum) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 
        $this->getCuenta()->getBalance() * 0.1
      );
    } else if ($this->getCuenta() instanceOf \cuentas\Black) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 500 -
        date('l', strtotime($this->getCuenta()->getUltimoMovimiento() || date("yyyy-mm-dd"))) * 100
      );
    }
  }

  public function mostrar(){
    return $this->getNombre().' ' .$this->getApellido();
  }

}

?>