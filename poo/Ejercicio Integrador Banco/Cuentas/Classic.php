<?php 

class Classic extends Cuenta
{
    public function debitar($monto, $location)
    {
        switch($location){
            case 'Banelco':
                $this->setBalance($this->balance-$monto+$monto/100*5);
                break;
            case 'Link':
            $this->setBalance($this->balance-$monto+$monto/100*10);
            case 'Caja':
            $this->setBalance($this->balance-$monto);
        }

        $this->setLastMove(time());
    }

    public function cobrarServicios($cliente)
    {
        $this->balance=$this->balance-100;
    }

    public function acreditar($monto)
    {
        $this->$balance+$monto-$monto/100*5;
    }
}