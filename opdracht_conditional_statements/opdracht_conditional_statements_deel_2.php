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
	
	$capLetters = strtoupper ( $dag );
	$letter = 'a' ;
	$someLetters = str_replace ( 'A' , $letter , $capLetters) ;
	
	$letterPositie	=	strripos( $capLetters, 'A' );
	$newNotation = substr_replace ($capLetters , 'a' , $letterPositie , 1) ;
		
	
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $dag ?></p>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $capLetters ?></p>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $someLetters ?></p>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $newNotation ?></p>



</body>
</html>