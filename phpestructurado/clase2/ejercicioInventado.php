
<?php
$nombre="Daniel";
$apellido="Fuentes";
$dni="12345678";
$dias=["lunes","martes","miércoles","jueves","viernes","sábado","domingo"];

$evaluaciones=["Regular","Bueno","excelente"];
$porcentaje=[10,20,30];
$porcentajeobtenido=0;

$sueldo=8000;
$dia=3;
$evaluacion= 2;


if ($evaluacion > 2 ||$dia > 6) {
    echo"No existen 8 dias de la semana, ni hay otro concepto de evaluacion que Regular, Bueno o Excelente.";
}else{
    if($evaluaciones[0]){
        $porcentajeobtenido=$porcentaje[0];
    }
    elseif($evaluaciones[1]){
        $porcentajeobtenido=$porcentaje[1];
    }
    elseif($evaluaciones[2]){
        $porcentajeobtenido=$porcentaje[2];
    }
    $aumento=($sueldo*$porcentajeobtenido)/100;
    $nuevosueldo= $sueldo+$aumento ;


    echo"Estimado(a) $nombre $apellido, portador del DNI:$dni, le informamoss que el día de hoy: $dias[$dia], de acuerdo al nivel de evaluación obtenido:$evaluaciones[$evaluacion], usted ha recibido un aumento del $porcentajeobtenido%, siendo su aumento de:$aumento$ y su nuevo sueldo es de: $nuevosueldo.";
    echo"<hr>";
    echo"!!!Felicitaciones!!!";
}



















?>