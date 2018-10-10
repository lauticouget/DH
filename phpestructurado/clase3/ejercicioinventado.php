<?php
$nombre="Daniel";
$apellido="Fuentes";
$monto=42000;
$tasa=15;
$dia=3;
$cuotas=24;
$acancelar=$monto+(($monto/100)*$tasa);




switch ($dia){
    case 1:
    $dia="Lunes";
    break;

    case 2:
    $dia="Martes";
    break;

    case 3:
    $dia="Miércoles";
    break;

    case 4:
    $dia="jueves";
    break;

    case 5:
    $dia="Viernes";
    break;

    case 6:
    $dia="Sábado";
    break;

    case 7:
    $dia="Domingo";
    break;

    default:echo"Los dias son 7";
    exit;
}



$cadacuota=[];

for ($i=1 ; $i<=$cuotas ; $i++){
    $cadacuota[]=$acancelar/$cuotas;

}




if($monto<1000||$monto>72000){
    echo"La compañía no tramita solicitudes por valores inferiores a $1000 y como máximo da créditos de $72000.";
    exit;
}
if($tasa != 5 && $tasa != 10 && $tasa != 15 && $tasa != 20){
    echo"Solo se permiten tasas de 5, 10, 15 y 20 por ciento.";
    exit;
}

echo"<b>Estimado: $nombre $apellido, el día de hoy: $dia, se le aprobó el crédito de:$monto, a una tasa del: $tasa%. Usted debe cancelar un total en pesos de :$acancelar, a razón de: $cuotas cuotas, y el valor de cada una es de:</b>";

echo"<hr>";




foreach ($cadacuota as $indice => $valor){
    echo"Nro. de la cuota $indice, valor de la cuota: $valor";
    echo"<hr>";
}






echo"<br>";
echo" <h6>Gracias por usar nuestros servicios de prestamo en línea.</h6>";




































?>