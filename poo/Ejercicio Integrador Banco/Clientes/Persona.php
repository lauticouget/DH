<?php

class Persona extends Cliente implements Imprimible
{   
    private $nombre;
    private $documento;
    private $nacimiento;
    private $apellido;
    private $cuit;

    public function __construct($email, $pass, Cuenta $cuenta, $documento, $nombre, $apellido, $nacimiento, $cuit)
    {
        parent::__construct($email,$pass,$cuenta);
        $this->documento=$documento;
        $this->apellido=$apellido;
        $this->nacimiento=$nacimiento;
        $this->cuit=$cuit;
        $this->nombre=$nombre;
       
    }

    
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }
    public function getDocumento()
    {
        return $this->documento;
    }
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }
    public function getNacimiento()
    {
        return $this->nacimiento;
    }
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    }
    public function getcuit()
    {
        return $this->cuit;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function mostrar()
    {
        echo $this->getNombre();
        echo"<br>";
        echo $this->getApellido();
        echo"<br>";
    }
}