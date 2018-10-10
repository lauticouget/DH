<?php
class pyme extends cliente
{
    // ATRIBUTOS
    private $razonSocial;
    private $CUIT;
    
    // CONSTRUCT
    public function __constructor($razonSocial, $CUIT, $email, $pass)
    {
        $this->razonSocial=$razonSocial;
        $this->CUIT=$CUIT;

    }


    // RAZON SOCIAL
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial=$razonSocial;
    }
    public function getRazonSocial($razonSocial)
    {
        return $this->razonSocial;
    }

    // CUIT
    public function setCUIT($CUIT)
    {
        $this->CUIT=$CUIT;
    }
    public function getCUIT()
    {
        return $this->CUIT;
    }
}