<?php 

class Platinum extends Cuenta
{
    public function debitar($monto, $location)
    {
        if($balance<5000){
                $this->setBalance($this->balance-$monto-$monto/100*5);  
        }else{
                $this->setBalance($this->balance-$monto-$monto);
            }
        $this->lastMove=date('y-m-d');
    }

    
    public function acreditar($monto)
    {
        $this->balance=$this->balance+$monto;
        $this->lastMove=date('y-m-d');
    }

    public function cobrarServicios($cliente)
    {
        $this->balance=$this->balance - $this->balance/100*10;
        
    }

}