<?php
//iniciamos sesion
session_start();
$error="";
if(isset($_SESSION["login"])){
    header('Location:privado12.php');           
}
if(isset($_COOKIE["password"])){
    if($_COOKIE["password"]==1234){
        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["nomusuari"];
        header('Location:privado12.php');  
    }else{
        $error="credenciales incorrectas";
    }
         
}


if(isset($_REQUEST["submit"])){
        if($_REQUEST["password"]=="1234"){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["username"];
            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("nomusuari",$_REQUEST["username"],time()+365*24*60*60);
            }
            header('Location:privado12.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo12.css">
    <title>Registro</title>
</head>

    <?=$error?>

    <form  method="post" action="" enctype="multipart/form-data" >
        <label for="usuario"> Usuario </label>
          <input type="text"  name="username" required>
          <br><br>
      <label for="password">Password</label>
             <input type="password" name="password"required>
             <br><br>
      <label for="password">Recordar</label>
        <input type="checkbox" checked="checked" name="recordar" value="1">
         <br><br>
    <input type="submit" name="submit" value="Enviar">

       
    
   
    
    </form>
</body>
</html>