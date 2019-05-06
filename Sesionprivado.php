<?php
// en la session guarda un identificador siempre que no cerremos el navegador 
//logout te envia al formulario de  iniciar session otra vez

session_start();
if(isset($_REQUEST["logout"])){
    session_destroy(); 
    header('Location:Iniciar.php');           
}
//comporbamos que el login esta definido
if(isset($_SESSION["login"])){
?>
Bienvenido......<?=$_SESSION["nom"]?>

<a href="Sesionprivado.php?logout">[logout]</a>
<?php
}else{
    header('Location:Iniciar.php');           
}
?>