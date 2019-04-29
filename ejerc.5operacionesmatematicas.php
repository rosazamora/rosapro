<?php
//funcion suma 
    function suma($a,$b){
        $sum=$a+$b;
    
        return $sum;
    }
        
//funcion Resta


    function resta($a,$b){
        $rest=$a-$b;
        return $rest;
    }
// funcion multiplicación
    function multiplicar($a,$b){
        $mult=$a*$b;
        return $mult;
    }

    function dividir($a,$b){
        $div=$a/$b;
        return $div;
    }


    $a=20;
    $b=10;
    $sum=suma($a,$b);
    $rest=resta($a,$b);
    $mult=multiplicar($a,$b);
    $div=dividir($a,$b);
        
    echo "<br> el resultado de la suma es:".$sum;
    echo "<br> el resultado de la resta es:".$rest;
    echo "<br> el resultado de la multiplicacion es:".$mult;
    echo "<br> el resultado de la multiplicacion es:".$div;
?>