<?php 

class Multinacional extends Cliente Implements Liquidable
{
    private $razonSocial;
    private $paisDeOrigen;

    public function __construct($email, $pass, $cuenta ,$razonSocial, $paisDeOrigen)
    {
        parent::__construct($email,$pass,$cuenta);
        $this->razonSocial=$razonSocial;
        $this->paisDeOrigen=$paisDeOrigen;
    }
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial=$razonSocial;
    }
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }
    public function setPaisDeOrigen($paisDeOrigen)
    {
        $this->paisDeOrigen=$paisDeOrigen;
    }
    public function getPaisDeOrigen()
    {
        return $this->paisDeOrigen;
    }

    public function liquidarHaberes($persona, $monto)
    {
        $persona->getCuenta()->acreditar($monto);
        $this->getCuenta()->debitar($monto+500);
    }

    
}