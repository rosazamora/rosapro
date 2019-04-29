<?php
//falta completar mirar en git hub
/*Funcion -Reciba un string
- Compare si el string dado es igual a la
contraseña almacenada
- Si lo es: mensaje en verde, todo correcto.
- Si no lo es: mensaje en rojo, contraseña
incorrecta.*/

function validaPassword($valor){
    $valida=false;
    $contraseña = "11a5b35f9b1bb15fd3b431d7489ffbc8";
    if(md5(sha1($valor))==$contraseña){
       $valida=true;
     }
    return $valida;
 }





/*//prueba para utilizar password
$str="patata";
if($validaPassword($str)){
    print("<p class='correcto'.<p>\n");
    print("<p class='error'.<p>\n");
    
}*/
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
    <form action="" method="post">
         <label for="pass">Contraseña</label> <input type="text" name=contraseña>
         <input type="submit" name="submit" value="aceptar">
    </form>
    
  
    
</body>
</html>
