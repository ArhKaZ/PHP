<!DOCTYPE html>
<html>
	<head>
		<title> Test php </title>
	</head>
	<body>
		<h1> Ma première page PHP </h1>
		<a href="var1.php?name='Jean Paul SAH'"> Hey Bg </a> </br>
		<?php 
		$nb = rand(1,7);
			if ($nb <= 3)
			{
				echo date('d/m/y h:i:s');
				echo "</br>";
				echo "Tu as de la chance, tu vas trouver de l'argent par terre"; 
				echo "</br>";
			    $nom = "Hugo";
			}
			else
			{
				echo date('d/m/y h:i:s');
				echo "</br>";
				echo "Tu n'as pas de chance, tu t'appeles surement Antoine";
				echo "</br>";
				$nom = "Antoine";
			}
		 echo "Welcome $nom" ; 
		 ?>
		
	</body>
</html>