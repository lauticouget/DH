<?php

require_once(realpath("clientes/persona.php"));

interface Liquidable{
	public function liquidarHaberes(\clientes\Persona $persona, $monto);
}

  ?>