<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Funciones PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estiloT.css'>
    <script src=''></script>
    <?php
     require ('Ejercicio9Tfecha.php');
    ?>
</head> 

<body>
        <?php

        $fecha="05-03-2011";
        if(formatoEuropeo($fecha)){
            setlocale(LC_TIME,"spanish");
            echo ucfirst(strftime("%A,%d %D del %Y",
                strtotime($fecha)));
        
        }else{
            print("<p> La fecha $fecha no está en formato europeo <p>\n");
       
          
        ?>
    
</body>
</html> 
<?php
        }
?>

