<!DOCTYPE html>
<html>
<head>
	<title>Variables con php</title>
</head>
<body>

<?php 

	$mensaje_es="Hola";
		$mensaje_en="Hello";
		$idioma= "es"; //variable que decide el idioma de la pagina
		$idioma1= "en"; //variable que decide el idioma de la pagina

	$mensaje= "mensaje_" . $idioma;

	$mensaje1= "mensaje_" . $idioma1;

	print $$mensaje; //lo equivalente a print $mensaje_es

	print $$mensaje1; //lo equivalente a print $mensaje_es

	?>
<!-- Operradores revisar codigo-->
	<?php

	echo "<h3>Postincrement</h3>";
	$a = 5;
	echo “Deberia ser 5: " . $a++;
	echo " Deberia ser 6: " . $a .;
	echo "<h3>Preincrement</h3>";
	$a = 5;
	echo “Deberia ser 6: " . ++$a . "<br />\n";
	echo “Deberia ser 6: " . $a . "<br />\n";

?>

</body>
</html>