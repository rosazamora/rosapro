<?php
//EJERCICIO 1.5

/*ejemplo
string(hola laura ramirez utilizamo explode
array("hola","laura", Ramirez
para cada par de pañabras
comparar las 2 letrs de la 1ª palabrar con substring

Bicicleta tambor oruga - > SI
Hola que tal -> NO
*/

if(isset($_POST["submit"])) {
    $edad = $_POST['edad'];

    Function palabras($x){
         $x="Bicicleta, tambor,oruga";
         $array=explode("", $x);

         print($array);

        }

    }
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

      
?>



