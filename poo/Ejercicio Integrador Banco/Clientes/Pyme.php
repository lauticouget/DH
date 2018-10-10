<?php

class Pyme extends Cliente Implements Liquidable, Imprimible
{
    private $razonSocial;

    public function __construct($email,$pass,$cuenta,$razonSocial)
    {
        parent::__construct($email,$pass,$cuenta);
        $this->razonSocial=$razonSocial;
        
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial=$razonSocial;
    }
   
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function liquidarHaberes($persona, $monto)
    {
        $persona->getCuenta()->acreditar($monto);
        $this->getCuenta()->debitar($monto + $monto/100*1);
    }

    public function mostrar()
    {
        echo $this->getRazonSocial();
    }
}