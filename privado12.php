   
<?php
session_start();
if(isset($_REQUEST["logout"])){
    session_destroy(); 
    setcookie("password",0,1);
    setcookie("nomusuari",0,1);
    header('Location:Login12.php');           
}
if(isset($_SESSION["login"])&&$_SESSION["login"]==true){
?>
Bienvenido......<?=$_SESSION["nom"]?>

<a href="privado12.php?logout">[logout]</a>
<?php
}else{
    header('Location:Login12.php');           
}
?>