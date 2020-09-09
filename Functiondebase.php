<!DOCTYPE html>
<html>
<head>
<title>Ma page</title>
</head>
<body>
<h1> Ma page web </h1>
<?php

function il_aurait($tableau,$ele)
{
    $trouve = false;
    foreach ($tableau as $ind=>$val) {
        if ($ele === $val) {
            $trouve = true;
        }
    }
    return $trouve;
}
?>

<?php

function valMax($tableau)
{
    $max = 0;
    foreach ($tableau as $ind => $valeur) {
        if($valeur>$tableau[$max])
        {
            $max= $ind;
        }
    }
    return $max;
}


?>
</br>
<?php


function valMin($tableau)
{
    $resu = $tableau[0];
    for ($i = 1; $i<count($tableau);$i++)
    {
        if ($resu>$tableau[$i]);
        {
            $resu = $tableau[$i];
        }
        return $resu;
    }

}
?>
</br>
<?php
$t=array(0=>0,1=>7,3=>9,4=>10,5=>14,7=>33);
$tabloo=array(0=>0,1=>7,3=>15,4=>64,6=>140);
$val = rand(0,10);
$tablo=array(0=>0,1=>3,3=>5,4=>7,6=>10);
echo valMax($t). '</br>';
echo 'valeurmini = ' . valMin($tabloo).  '</br>';
if (il_aurait($tablo,$val))
    echo 'exist  </br>';
else
    echo 'non exist </br>';
?>
<p> Bonjour…. P </p>
</body>
</html>