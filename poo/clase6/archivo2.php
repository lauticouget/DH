<?php

namespace prueba\ejemplo;
include 'archivo1.php';



const PRUEBA = 2;
function prueba() {}
class prueba
{
    static function staticmethod() 
    {
        echo"Static Method De la prueba 2";
    }
}


/* Unqualified name */
prueba(); // resuelve a function prueba\ejemplo\prueba
prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo "<br>";
echo PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA
echo"<br>";

/* Qualified name */
subEspacio\prueba(); // resuelve a function prueba\ejemplo\subnamespace\prueba
echo "<br>";
subEspacio\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\subnamespace\prueba
echo "<br>";    

echo subEspacio\PRUEBA; // resuelve a constante prueba\ejemplo\subnamespace\PRUEBA
echo "<br>";

/* Fully qualified name */
\prueba\ejemplo\prueba(); // resuelve a function prueba\ejemplo\prueba
echo "<br>";
\prueba\ejemplo\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo "<br>";
echo \prueba\ejemplo\PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA
?>
