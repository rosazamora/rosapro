
<?php
    //$edad= $_POST['edad'];
   // print("La edad es: $edad");
    /* mostrar formulario para recoger numero,
    y ese numero se debe y mostrar por pantalla
    si recibe el numero mostrarlo 
    sino mostrar formulario para recoger ese numero
     isset devuelve true */ 

     
    if(isset($_POST["submit"])) {
        $edad = $_POST['edad'];
       print($edad);
        } else{
            
        
        
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
         <label for="edad">Edad</label> <input type="text" name="edad">
         <input type="submit" name="submit" value="aceptar">
    </form>
    
  
    
</body>
</html>
<?php

        }
?>




