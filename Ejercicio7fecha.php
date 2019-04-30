<?php
/*funcion para fecha, tenemos dos fechas allar cual es el mayor de la fecha*/

   

    $fecha1= strtotime("5 May 2011");
    
    $fecha2= strtotime("6 January 2010");

    //$fecha= date ("j/n/Y H:i", $fecha1);
    //echo "<br>primera fecha " .$fecha1;
    //echo "<br>segunda fecha " .$fecha2;

    function comparafechamayor($fecha1,$fecha2){ 
    
        if ($fecha1 > $fecha2) {
            $comparacion ="la fecha1 es mayor que la fecha2";
        
        }elseif ($fecha1 < $fecha2 ) {
            $comparacion ="La fecha1 es menor que la fecha2";
        } else{
                $comparacion = "La fecha1 es igual a fecha2";
        }
            return $comparacion;
    }

    // hemos extraido esta llamada a otro php

        $fecha1= strtotime("5 May 2011");
        $fecha2= strtotime("6 January 2010");

        $comparacion = comparafechamayor($fecha1,$fecha2);
        print_r($comparacion);

    
       
  
           












?>