
<?php
function validaPassword($valor){
    $valida=false;
    $contraseña = "11a5b35f9b1bb15fd3b431d7489ffbc8";
    if(md5(sha1($valor))==$contraseña){
       $valida=true;
     }
    return $valida;
 }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="" content="">
    <link rel="stylesheet" href="estiloformularioejercicio10.css">
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

