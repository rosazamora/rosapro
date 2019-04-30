<?php

/* 
definir variable suma por cada numero
añadir a la variable suma su valor*/


    $numeros=array();


        for ($i=0;$i<10;$i++){
                     $numeros[]=rand(0,100);
       
             }

            echo "<br> Contenido del array: <br>";

             print_r ($numeros);
 
    //suma con foreach
    $suma=0;
    foreach($numeros as $numero){
        $suma=$suma+$numero;
    }  
    echo"<br> <strong>Utilizando foreach <strong>:"; 
    echo"<br> La suma es:".$suma; 
        


//max  con foreach
/* defnir variable max
asumir que el primer elemento es el maximo por cada numero 
comparar con el maximo si es mas grande actualizar el maximo
*/
    $max=$numeros[0];
    foreach ($numeros as $numero) {
        if($numero>$max){
             $max=$numero;

        }
    }
           
    
         echo "<br>EL máximo es".$max;
     


//mínimo
/* defnir variable min
asumir que el primer elemento es el minimo por cada numero 
comparar con el minimo si es mas pequeño actualizar el mínimo
*/

    $min=$numeros[0];
    foreach($numeros as $numero){
        if($numero<$min){
                $min=$numero;
        }
    }
        echo "<br> El mínimo es".$min;
        echo "<br><br>";
   

//con for y la funcion count
//suma
     $suma=0;
    for($i=0;$i<count($numeros);$i++){
        $suma=$suma+$numeros[$i];
    }
    echo "<br> <strong>Utilizando for<strong>: <br> la suma es:" .$suma;


//máximo 
    $max=$numeros[0];
    for($i=0;$i<count($numeros);$i++){
        if($numeros[$i]>$max)$max=$numeros[$i];

    }
    echo "<br> el máximo es".$max;

//minimo
    $min=$numeros[0];
    for($i=0;$i<count($numeros);$i++){
        if($numeros[$i]<$min)$min=$numeros[$i];

    }
    echo "<br> el mínimo es".$min;

//utilizando while 
    while($i<count($numeros)){
        $suma=$suma+$numeros[$i];
        if($numeros[$i]>$max) $max=$numeros[$i];
        if($numeros[$i]<$min) $min=$numeros[$i];
        $i++;
    }

    echo "<br><br>";
    echo "<br>Utilizando While <br>";
    echo "La suma es:".$suma." comparado con ".array_sum($numeros);;
    echo "<br>";
    echo "El maximo es:".$max."comparado con ".max($numeros);;
    echo "<br>";
    echo "El minimo es:".$min."comparado con ".min($numeros);;
    echo "<br><br>";



    






?>


