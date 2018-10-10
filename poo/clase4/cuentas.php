<?php

abstract class Cuenta 
{
    private $cbu;
    private $balance;
    private $lastMove;

    public _construct($cbu, $balance, $lastMove)
    {
        $this->cbu=$cbu;
    }

    public function setCBU()
    {
        return $this->cbu;
    }
    public function getCBU()
    {
        return $this->cbu;
    }

    public function setBalance()
    {
        return $this->cbu;
    }
    public function setBalance()
    {
        return $this->cbu;
    }

    public function setLastMove()
    {
        parent::acreditar($monto);
        $this->LastMove=time();
    }
    public function setLastMove()
    {
        return $this->cbu;
    }

    // DEBITAR
    abstract public function debitar($monto, $puntoTransaccion)
    {
        
    }
    public function acreditar()
    {
        $this->balance+$monto;
    }

}