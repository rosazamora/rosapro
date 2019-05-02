<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<body>  

<?php
/* -Usuario y contraseña que seria un formulario de Registro
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
       $usuarioErr = $contraseña1Err = $contraseña2Err="";

       //validando usuario
       if(isset($_REQUEST["submit"])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["usuario"])) {
             $usuario ="introducir usuario";
          } else {
             $usuario= test_input($_POST["usuario"]);
        // chequeamos que vayan letras sin espacios en blanco
            if (!preg_match("/^[a-zA-ZñÑ]*$/",$usuario)) {
              $usuarioErr = "Solo letras y sin espacios en blanco"; 
            }
            }
        }
          }

        //validando contraseña
        if(empty($_POST["contraseña1"])){
            $contraseña1="introducir contraseña";
        }else{
            $contraseña1=test_input($_POST["contraseña1"]);
            if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[#!$~]).{6,20}/",$contraseña1)) {
                $contraseña1Err="error contraseña";
            }
        }
        
        
        //comprobamos que las contraseña1=contraseña2
       /* if(empty($_POST["contraseña2"])){
            $contraseña2="";
        }
          if($contraseña1=$contraseña2){
             
         }*/
        
        
        
      
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<h2>Validacion Registro</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Usuario: <input type="text" name="usuario" value="<?php echo $usuario;?>">
  <span class="error">* <?php echo $usuarioErr;?></span>
  <br><br>
contraseña1:<input type="text" name="contraseña1" value="<?php echo $contraseña1;?>">
<span class="error">* <?php echo $contraseña1Err;?></span>
  <br><br>
contraseña2: <input type="text" name="contraseña2" value="<?php echo $contraseña2;?>">
<span class="error">* <?php echo $contraseña2Err;?></span>
<br><br>
  <input type="submit" name="submit" value="submit">  
</form>
</body>

<!--en el siguiente ejercicio guardar la cokkie hay que darle el nombre,valor y tiempo 
 header location es la direccion donde va y es una sesion privada,cuando guardas
 la cockie password no es correcto pero como no sabemos de base de datos lo haremos
 de esta manera de momento y se encripta co md5--->
</html> 