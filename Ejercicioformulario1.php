<?php
     
     $lafrase= "hola laura Ramirez"
    if (isset($_REQUEST["frase"])){


    echo "la frase es:".$_REQUEST["frase"];

       $palabras=explode("",$lafrase);
       
       echo "<br>";
       print_r($palabras);







    }else{


}



    /*-Se recibe una frase
      -Se obtiene la frase
      -Para cada par de palabras

    */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>

<!-- validar formulario en un solo archivo -->
    <form action="formulario.php" method="post">
         <label for="edad">dime algo</label> <input type="text" name="frase">
         <input type="submit" name="submit" value="enviar">
    </form>
    
  
    
</body>
</html>
