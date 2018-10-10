<?php 

class Black extends Cuenta
{
    public function debitar($monto)
    {
        $this->setBalance($this->balance-$monto);       
    }
    
    public function acreditar($monto)
    {
        if($monto>1000000){
            $this->balance+$monto-$monto/100*4;
        }else{
            $this->balance+$monto;
        }
        
    }
    public function cobrarServicios($cliente)
    {
        $date=date('2016/09/28');
        // $Weekend  es Cualquiera. No tratar de entenderlo.
        $weekday=date('i', strtotime($date));
        
        $this->balance=$this->balance - 500 -100*($weekday);
        $this->lastMove=date('y-m-d');
    }
}