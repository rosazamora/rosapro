<?php
//buscar en le stackoverflow para información y soluciones
//corregir con el git hub
/*Se nos devuelva por escrito el día y mes
como si fuese una carta formal:
P.E. de 19/03/2014 pasamos a
“Miercoles, 19 de Marzo del 2014”
-Podemos dar por hecho que se recibirá
esta fecha en formato europeo
usar la variable setlocale
*/

    $fecha="05-03-2011"
    //$fecha=strtotime($fecha); para comprobación
  
    function transformafecha($fecha){
        $nuevafecha="";
        if($pais=="EUR"){
            $valores=explode("-",$fecha); }
             if(count($valores)==3) {
            // el checkdate valida = mes dia y año
                if(checkdate($valores[1],$valores[0],$valores[2])){
                    $nuevafecha= $valores[1]."/".$valores[0]."/".$valores[2];
                }else{
                    $nuevafecha="No es una fecha";
                }
            }  
        }    

/*print("hola")
            $fecha="05-03-2011";
            if(formatoEuropeo($fecha)){
                setlocale(LC_TIME,"spanish");
                echo ucfirst(strftime("%A,%d %D del %Y",
                    strtotime($fecha)));

            }else{
                print("<p> La fecha $fecha no está en formato europeo <p>\n");
            }
  }

        $fecha="5/03/2011";
        $pais="EEUU";
        $resultado=formatoeuropeo($fecha);
        //print($fecha);*/


    ?>