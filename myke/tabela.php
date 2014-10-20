<!DOCTYPE html>	
<html>	
<head>	
	<meta charset="UTF-8">	
	<title>Tabela de Multiplicação</title>

	<style type="text/css"> 
 		tr.par{background: white;}
 		th{background: black; color: white; border: 1px solid black;} 
 		td{background: #ccc; color: black; border: 1px dotted red;} 
 		table{border-collapse: collapse; width: 30%; border: 2px solid blue; text-align: center;}
 	</style> 	

	</head>	
	 	
	<body>
		<p> TABELA DE MULTIPLICAÇÃO </p>
		<table>
			<?php
				for($i=1;$i<=10;$i++){
					if ($i%2==1){
						echo "<tr>";
					}
					else {
						echo "<tr class=\"par\">";
					}
					for($j=1;$j<=10;$j++){
						if($j!=1&&$i!=1){
							echo "<td>" . $i*$j . "</td>";
						}
						else{
							echo "<th>" . $i*$j . "</th>";
						}
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>	
</html>
