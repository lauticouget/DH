<?php

abstract class Cuenta
{
    protected $cbu;
    protected $lastMove;
    protected $balance = null;
    

    public function __construct($cbu ,$lastMove, $balance) 
    {
        $this->cbu=$cbu;
        $this->balance=$balance;
        $this->lastMove=$lastMove;
    }


    abstract public function cobrarServicios($cliente);



    abstract public function debitar($monto);
    
    abstract public function acreditar($monto);

     
    public function getCbu()
    {
        return $this->cbu;
    }


    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    public function getLastMove()
    {
        return $this->lastMove;
    }

    public function setLastMove($lastMove)
    {
        $this->lastMove = $lastMove;

        return $this;
    }


    public function getLastMoveLocation()
    {
        return $this->lastMoveLocation;
    }


    public function setLastMoveLocation($lastMoveLocation)
    {
        $this->lastMoveLocation = $lastMoveLocation;

        return $this;
    }
}