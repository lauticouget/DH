<?php
class multinacional extends pyme
{
    private $pais;

    public function __construct($razonSocial, $CUIT, $email, $pass, $pais)
    {

    }
    public function setPais($pais)
    {
        $this->pais=$pais;
    }
    public function getPais()
    {
        return $this->pais;
    }
}