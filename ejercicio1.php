<!DOCTYPE html>
<html lang="es">
<head>

	<title>combinando html y php </title>

</head>
<body>
<h1>PHP Y HTML</h1>

 <p>este es un parrafo 1 escrito desde HTML</p>
 <?php
 print("<p> este es parrafo 2, escrito por php </p>\n");
 ?>
<p>este es un parrafo 3 escrito desde HTML</p>
<?php
 print("<p> este es parrafo 4 escrito por php </p>\n");
 ?>
 <pre>
 	hola
 	 mundo
 </pre>

<?php
 print("<pre> este es
  escrito por php </pre>");
 ?>


<!-- para cambiar imagen -->
<!-- es importante poner el ; para finalizar pero ojo con las comillas de dentro que sean simples ya que los comillas dobles son para decir que se acaba la sentencia -->
<p>imagen con html</p>
<img src="../img/gatito.jpg"></img>

<?php
 print("<img src='../img/gatito.jpg'></img>");
 ?>
 
<!-- echo muestra una o mas cadenas -->
 <?php
 echo "hola mundo";;
 ?><?php

 echo "hola, mundo";;
 ?>
 





</body>
</html>