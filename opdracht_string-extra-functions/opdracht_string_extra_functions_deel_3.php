<?php
	$lettertje = 'e';
	$cijfertje = 3;
	$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';
	$nieuwWoord = str_replace ( $lettertje , $cijfertje , $langsteWoord) ;

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>origineel woord is <?php echo $langsteWoord ?></p>
	<p>nieuw woord is <?php echo $nieuwWoord ?></p>

</body>
</html>