<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<body>  



<?php
/* -Usuario y contraseña
Las dos contraseñas que sean iguales
Para la contraseña
   -Longitud de contraseña 6 a 8 caracteres
   -Contiene como minimo un caracter mayusculas
   -contiene como minomo un caracter minisculas
   -continue como minimo un caracter un numerico
   -Que contiene un caracter de estos #!$~(esto sale con Alt Gr 4)

   pagina para ver expresiones regulares
   https://diego.com.es/expresiones-regulares-en-php
   
   */
        $usuario = $contraseña1=$contraseña2 = "";
        $usuarioErr=$contraseña1Err=$contraseña2Err="";












?>

Usuario: <input type="usuario" name="usuario" value="<?php echo $usuario;?>">
  <span class="error">* <?php echo $usuarioErr;?></span>
  <br><br>
$contraseña1:<input type="text" name="password" value="<?php echo $contraseña;?>">
<span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
contraseña2: <input type="text" name="contraseña" value="">
<br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>  