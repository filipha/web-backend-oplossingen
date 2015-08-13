<?php
	$getal = 1;

	if ( $getal == 1 ) 
	{
		$dag = "maandag";
	}
	if ( $getal == 2 ) 
	{
		$dag = "dinsdag";
	}
	if ( $getal == 3 ) 
	{
		$dag = "woensdag";
	}
	if ( $getal == 4 ) 
	{
		$dag = "donderdag";
	}
	if ( $getal == 5 ) 
	{
		$dag = "vrijdag";
	}
	if ( $getal == 6 ) 
	{
		$dag = "zaterdag";
	}
	if ( $getal == 7 ) 
	{
		$dag = "zondag";
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $dag?></p>



</body>
</html>