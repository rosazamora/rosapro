<?php
// en la session guarda un identificador siempre que no cerremos el navegador

session_start();
if(isset($_REQUEST["logout"])){
    session_destroy(); 
    header('Location:ejemplo_login.php');           
}
//comporbamos que el login esta definido
if(isset($_SESSION["login"])){
?>
Bienvenido......<?=$_SESSION["nom"]?>

<a href="Sesionprivado.php?logout">[logout]</a>
<?php
}else{
    header('EjercicioLogin.php');           
}
?>