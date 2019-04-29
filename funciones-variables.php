<?php
function f1($parametro1,$parametro2="NOLOSE",$parametro3="NOLOSE3"){
    $respuesta="Hola".$parametro1."".$parametro2."".$parametro3;
    return $respuesta;
    
}
$respuestadelafuncion="";
echo "<br> Antes de la llamada:$respuestadelafuncion";
$respuestadelafuncion=f1("javi","Puit","Juste");