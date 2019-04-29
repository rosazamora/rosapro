<?php
/*Si está en formato EEUU que nos la
transforme en formato europeo.
- Si está en formato europeo que nos la
transforme en formato EEUU.
- Podremos añadir un parámetro de formato de
fecha
Formato europeo: dd/mm/AAAA
Formato EEUU: mm/dd/AAAA*/


   
    function transformafecha($fecha,$pais){
        $nuevafecha="";
        if($pais=="EUR"){
            $valores=explode("-",$fecha); 
            if(count($valores)==3) {
            // el checkdate valida = mes dia y año
                if(checkdate($valores[1],$valores[0],$valores[2])){
                    $nuevafecha= $valores[1]."/".$valores[0]."/".$valores[2];
                }else{
                    $nuevafecha="No es una fecha";
                }
            }
          //formato europeo pasar a eeuu
        } if($pais=="EEUU"){
            $valores=explode("/",$fecha);
            if(count($valores)==3){
                // el checkdate valida = mes dia y año formato europeo
                if(checkdate($valores[0],$valores[1],$valores[2])) {
                    $nuevafecha= ($valores[0]."-".$valores[1]."-".$valores[2]);
                }else{
                    $nuevafecha="No es una fecha"; 
                }    
            }
        }
        return $nuevafecha;
                          
    }

    $fecha="5/7/2011";
    $pais="EEUU";
    $resultado=transformafecha($fecha,$pais);
    print($resultado);
?>    