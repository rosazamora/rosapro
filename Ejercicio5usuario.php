
<?php
//ES IMPORTANTE EL ATRIBUTO NAME YA QUE ES EL QUE NOS DA INFO PARA VALIDAR
/*https://www.w3schools.com/php/php_form_validation.asp  PARA QUE EVITAR
HACKERS DE LA CUENTA DEL FORMULARIO*/



/*Mediante un campo de texto y uno de password, comprobaremos
las credenciales de un usuario
- El usuario deberá ser “USER” y la password “PASSWORD”.
- Si se introducen correctamente devuelve un mensaje de OK en
verde.
- Si se introducen incorrectamente devuelve un mensaje de ERROR
en rojo.*/

$mostrarFormulario=true;
$missatge="";

if(isset($_REQUEST["submit"])){

    if($_REQUEST["username"]=="USER" &&
    $_REQUEST["password"]=="PASSWORD"){
      header('Location:Ejercicio5usuario_loginOK.php') 
      $mostrarFormulario=false; 

    }else{
        //$missatge= falta acabar mirar en el repositorio
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
   <?=$missatge?> 

<!-- validar formulario-->
    <form action="Ejercicio5usuario.php" method="REQUEST" enctype="multipart/form-data">
         <label for="User">Usuario</label> <input type="text" name="username">
         <br><br>
         <label for="password">Password</label> <input type="text" name="password">
         <br> <br>
         <input type="submit" name="submit" value="aceptar">
    </form>
    
  
    
</body>
</html>
<?php

      
?>




