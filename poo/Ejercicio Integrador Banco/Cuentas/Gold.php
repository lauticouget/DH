<?php 

class Gold extends Cuenta
{
    public function debitar($monto, $location)
    {
        switch($location){
            case 'Banelco':
                $this->setBalance($this->balance-$monto);
                break;
            case 'Link':
            $this->setBalance($this->balance-$monto-$monto/100*5);
            case 'Caja':
            $this->setBalance($this->balance-$monto);
        }
        
    }

    public function acreditar($monto)
    {
        if($monto<25000){
            $this->balance = $this->balance+$monto-$monto/100*3;
        }else{
            $this->balance = $this->balance+$monto;
        }
    }

    public function cobrarServicios($cliente)
    {
        if($cliente instanceof Persona){
        $this->balance=$this->balance-10*(strlen($cliente->getNombre()));
        }else{
            $this->balance=$this->balance-5*(strlen($cliente->getRazonSocial()));
        }
    }

}