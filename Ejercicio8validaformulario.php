
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}


</style>
</head>
<body>  

<?php


/*Dado un formulario con los campos:
Nombre *: text
Apellidos : text
Edad: number
Email *: text
Comentarios: textarea
- Comprobar que los datos con asterisco son introducidos sino
mostrar un error junto al campo.
- Si se ha introducido la edad (recordemos que es opcional ), debe
ser mayor o igual de 18, sino mostrar un error junto al campo. Sino
se ha introducido se debe saltar esta comprobación.
- Cuando se devuelve el formulario con o sin errores debe estar
rellenado para evitar que el usuario olvide que ha introducido.
Acabar el ejercicio
*/



// define las variables set to empty values
  $nameErr =$apellidoErr = $edadErr= $emailErr = $genderErr = $websiteErr = "";
  $name =$edad = $apellido = $email =$gender = $comment = $website = "";
//comprobamos submit
//llamamos ($_SERVER["REQUEST_METHOD"] == "POST") al principio y una sola vez 

  if(isset($_REQUEST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
         $nameErr = "Nombre obligatorio";
      } else {
         $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed"; 
        }
      }
    
      /* validacion de apellido revisar porque no es obligatorio */
   
      if (empty($_POST["apellido"])) {
         $apellidoErr = "Ingresar apellido";
        } else {
           $apellido = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) {
           $apellidoErr = "solo letras "; 
        }
     }
     
    /*validadion de edad sin ser obligatorio comprobacion que sea mayor
     de edad y sea un numero*/
   
      if(!empty($_POST["edad"])){
        $edad= test_input($_POST["edad"]);
        if (preg_match("/[0-9]/",$edad)) {
          if($edad <=18){
            $edadErr="la edad ha de ser mayor de 18";
          }
        }else{
          $edadErr = "edad tiene que ser numero"; 
        }
     }

     
    //validacion de email obligatorio

    if (empty($_POST["email"])) {
       $emailErr = "Email Obligatorio";
      } else {
        $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Formato email invalido"; 
       }
     }
    
  /*if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }*/

    if (empty($_POST["comment"])) {
      $comment = "";
     } else {
       $comment = test_input($_POST["comment"]);
     }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
    }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<!--Apellido no es obligatorio no haria falta llamar al error, Edad es obligatorio 
hay que poner eror-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>Name</label> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <label>Apellido</label> <input type="text" name="name" value="<?php echo $apellido;?>">
  <span class="error"> <?php echo $apellidoErr;?></span>
  <br><br>
<!--importante para validar la edad  hay que poner el type en text para hacer 
nuestras comprobaciones y luego pasarlo a type="number" para enviar al servidor-->
  <label>Edad</label><input type="number" name="edad" value="<?php echo $edad;?>">
  <span class="error"><?php echo $edadErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <!--Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br> -->
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <!--Genero:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span> --->
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>  