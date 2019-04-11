	<!DOCTYPE html>
	<html>
	<head>
		<title>Tabla de multiplicar</title>
	</head>


	<body>
	<h3>tabla de multiplicar</h3>

	<?php
	

	
		$tabla=0;
		$i=0;
		print("<table>");
		 while ($i<=10) {
		 	$i++;
            print("<tr>");
            $tabla=0;
		 	while ($tabla<= 10) {
		 		
		 		$tabla++;
		 		$resultado=$i*$tabla;


	 		print("<td> $i x $tabla  = $resultado </td>\n");
		 	}
   	 		print("</tr>\n");
	 		
			}
			print("</table>")
		
	
		
      

	
	?>
	</body>
	</html>