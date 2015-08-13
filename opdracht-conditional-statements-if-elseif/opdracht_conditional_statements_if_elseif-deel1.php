<?php
	$getal = 3;

	if ($getal >= 10 && $getal < 20)
	{
		$antwoord = "getal is tussen 10 en 20" ;
	} 
	elseif ($getal >= 20 && $getal < 30)
	{
		$antwoord = "getal is tussen 20 en 30" ;
	}
	elseif ($getal >= 30 && $getal < 40)
	{
		$antwoord = "getal is tussen 30 en 40" ;
	}
	elseif ($getal >= 40 && $getal < 50)
	{
		$antwoord = "getal is tussen 40 en 50" ;
	}
	elseif ($getal >= 50 && $getal < 60)
	{
		$antwoord = "getal is tussen 50 en 60" ;
	}
	elseif ($getal >= 60 && $getal < 70)
	{
		$antwoord = "getal is tussen 60 en 70" ;
	}
	elseif ($getal >= 70 && $getal < 80)
	{
		$antwoord = "getal is tussen 70 en 80" ;
	}
	elseif ($getal >= 80 && $getal < 90)
	{
		$antwoord = "getal is tussen 80 en 90" ;
	}
	elseif ($getal >= 90 && $getal < 100)
	{
		$antwoord = "getal is tussen 90 en 100" ;
	}
	else
	{
		$antwoord = "buiten de mogelijke range" ;
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>Het getal is <?php echo $getal ?> en is <?php echo $antwoord ?></p>

</body>
</html>