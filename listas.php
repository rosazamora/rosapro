<!DOCTYPE html>
<html>
<head>
	<title>listas php con for</title>
</head>
<body>

<!-- listas con for -->
<h1>Tabla de multiplicar</h1>

	<?PHP

		print("<ul>\n");
		$num=5;
		for($x=0; $x<=10; $x++){
			$resultado = $x*$num;
			print("<li>$num x $x = $resultado </li>\n");
		}
		print("</ul>\n");


	?>

	<?php
				
             
		for($x=0; $x<=10; $x++){
      print("<ul>\n");
			for($i = 0; $i <=10; $i++){
			$resultado = $x*$i;
			print("<li> $i x $x  = $resultado </li>\n");
		}
		print("</ul>\n");
        }

	?>
	
	




</body>
</html>