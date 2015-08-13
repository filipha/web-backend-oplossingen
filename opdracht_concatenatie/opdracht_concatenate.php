<?php
	$naam = 'Haesen';
	$voornaam = 'Filip';
	$volledigeNaam = $naam.' '.$voornaam ;
	$tekstLengte	=	strlen( $volledigeNaam );
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>Mijn naam is <?php echo $naam ?> en mijn voornaam is <?= $voornaam ?></p>
	<!--<p>Mijn volledige naam is <?php echo $voornaam.' '.$naam ?></p>-->
	<p>Mijn volledige naam is <?php echo $volledigeNaam ?></p>
	<p>Tekstlengte is <?= $tekstLengte ?></p>
	

</body>
</html>