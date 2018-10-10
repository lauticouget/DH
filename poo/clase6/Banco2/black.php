<?php 

require_once('cuenta.php');

class Black extends Cuenta
{

	public function debitar($monto, $origen){
		$this->setBalance($this->getBalance() - $monto);
	}

	//0% para Black o 4% para montos superiores a 1.000.000.
	public function acreditar($monto){
		if($monto >= 1000000)
			$this->setBalance($this->getBalance() + $monto * .96);
		else
			$this->setBalance($this->getBalance() + $monto);

	}
}

 ?>