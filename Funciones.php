<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Funciones PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <?php
    required ("Ejercicio7fecha.php")
    ?>
</head>

<body>
    <?php
   
   $fecha1= strtotime("5 May 2011");
   $fecha2= strtotime("6 January 2010");

   $comparacion = comparafechamayor($fecha1,$fecha2);
   print_r($comparacion);

   
    ?>

    
</body>
</html> 

