<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>
<!-- validar formulario en un solo archivo -->
    <form action="dos.php" method="post">
         <label for="edad">Edad</label> <input type="text" name="edad">
         <input type="submit" name="submit" value="aceptar">
    </form>
    


 <?php
    //$edad= $_POST['edad'];
   // print("La edad es: $edad");


    if(isset($_POST["submit"])){

        $edad= $_POST['edad'];
        
        else{
            
        }
    }
        

 ?>
 
    
</body>
</html>






