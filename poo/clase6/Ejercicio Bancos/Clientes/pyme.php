<?php
require 'Cliente.php';
Class Pyme extends Cliente {
	private $cuit;
	private $direccion;
	private $razonSocial;

public function __construct($cuit,$direccion,$razonSocial, $email, $pass, $cuenta){
  	parent::__construct($email, $pass, $cuenta);
    $this->cuit = $cuit;
    $this->direccion = $direccion;
    $this->razonSocial = $razonSocial;
}

  public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  public function getCuit(){
    return $this->cuit;
  }
  public function setDireccion($direccion){
    $this->direccion = $direccion;
  }

   public function getDireccion(){
    return $this->direccion;
  }
  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial(){
    return $this->razonSocial;
  }

  public function cobrarServicio() {
    //...
  }
/*   public function cobrarServicio() {
    if ($this->getCuenta() instanceOf \cuentas\Classic) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 100
      );
    } else if ($this->getCuenta() instanceOf \cuentas\Gold) {
      $this->getCuenta()->setBalance(
        $this->getCuenta()->getBalance() - 
        5 * strlen($this->getRazonSocial())
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

  public function liquidarHaberes(\clientes\Persona $persona, $monto){
    $persona->getCuenta()->acreditar($monto);
    $this->getCuenta()->debitar($monto*1.01, "Banelco");
  } */
  public function mostrar(){
    return $this->getRazonSocial();
  }


}

$pyme = new Pyme();
  ?>
