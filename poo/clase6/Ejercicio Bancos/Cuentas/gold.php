<?php 



class Gold extends Cuenta
{
	public function debitar($monto, $origen){
		switch ($origen) {
			case 'Link':
				$this->setBalance($this->getBalance() - $monto * 1.05);
				break;
			
			default:
				$this->setBalance($this->getBalance() - $monto);
		}
	}

	public function acreditar($monto)
	{
		if($monto < 25000) {
			$this->setBalance($this->getBalance() + $monto * .97);
		} else {
			$this->setBalance($this->getBalance() + $monto);
		}
	}
}

 ?>