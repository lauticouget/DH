<?php
include_once('Config.php');
// Multinacional con Gold
$goldMultinacional=new Gold(88888888888888,date("y-m-d"), null);
$multinacional=new Multinacional('McDonalds@gmail.com', 'Contraseña123', $goldMultinacional , "Mc&Co","EEUU");
$multinacional->getCuenta()->acreditar(70000);
$multinacional->getCuenta()->cobrarServicios($multinacional);




                    //  Persona Con Gold
$BlackPersona= new Black (6371263782163,date("y-m-d"),2000);
$persona= new Persona("persona@gmail.com", "constraseña123", $BlackPersona, 40243176, "Juan", "Gutierrez", "11/43/94", "20-40243176-5");
$persona->getCuenta()->cobrarServicios($persona);



                    // Pyme con platinum
$platinumAngies=new Platinum(57283652783,'asd',null);
$angies=new Pyme ('angies@gmail.com', 'angiesPassword123', $platinumAngies, 'razonAngies');
$angies->getCuenta()->acreditar(50000);


$blackWendys=new Black (3784682, 'lastmove', 40000);
$wendys= new Pyme ('wendys@gmail.com', 'wendyPass123', $blackWendys , 'razonWendy');
$wendys->getCuenta()->cobrarServicios($wendys);

preVar($persona);

preVar($angies);

$angies->liquidarHaberes($persona, 2000);
