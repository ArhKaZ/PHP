<!DOCTYPE html>
<html>
<head>
<title>Titre P </title>
</head>
<body>
<h1> Ma page web </h1>
<input type="text" id="valeur" name="valeur" required>
<?php 
function ValeurExiste($t, $nb)
{
	$exist = false;
	if ($nb === $t[$i]) {
		echo 'vrai </br>';
	$exist = true; }
	else 
		echo 'faux </br>';
}
 ?>
 
 
 
<?php
$i=0; //indice
$k=0; //nb d'éléments
$t=array(0=>5,2=>8,5=>"titi");
while ($k<count ($t))
{
	if(ISSET($t[$i])==true)
	{
		
		echo $t[$i] .'</br>';
		$k = $k+1;
	}
	else 
	{
		echo 'faux a indice '. $i .' pas de valeur </br>';
	}
	$i=$i+1;
}

	?>
<p> Bonjour…. P </p>
</body>
</html>