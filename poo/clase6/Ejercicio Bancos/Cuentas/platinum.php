<?php 



class Platinum extends Cuenta
{
	public function debitar($monto, $origen){

		$nuevoMonto = 0;

		if($this->getBalance() >= 5000)
			$nuevoMonto = $this->getBalance() - $monto;
		else
			$nuevoMonto = $this->getBalance() - $monto * 1.05;

		$this->setBalance($nuevoMonto);
	}


	public function acreditar($monto){
		$this->setBalance($this->getBalance() + $monto);
	}
}

 ?>