<?php

	$getal1 = 4 ;
	$getal2 = 6 ;
	$text = 'Goed weer vandaag' ;	
	
	function berekenSom ($getal1, $getal2) 
	{

		$berekenSom = $getal1 + $getal2 ;
		return $berekenSom ;
	}

	function product ($getal1, $getal2) 
	{

		$berekenProduct = $getal1 * $getal2 ;
		return $berekenProduct ;
	}

	function isEven ($getal1, $getal2 = FALSE)
	{

		if ( $getal1 % 2 == 0 ) {

			return TRUE ;
		}
			return FALSE ;
	}
	function convertCase ($text) {

		$textUpper = strtoupper ($text);
		$textLength = strlen ($text) ;
		$combined = array ( $textUpper, $textLength) ;
		//return $textUpper ;
		//return $textLength ;
		//echo 'De tekst is '.$combined[0]. ' en de lengte is ' .$combined[1] ;
		return $combined ;
	}

 $result = convertCase($text) ;

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<p>Getal 1 = <?= $getal1 ?></p>
<p>Getal 2 = <?= $getal2 ?></p>
<p>De som is : <?php echo berekenSom( $getal1, $getal2) ?></p>
<p>Het product is : <?php echo product( $getal1, $getal2) ?></p>
<p>Is <?= $getal1?> even ? <?php echo isEven( $getal1, $getal2) ?></p>
<p>De tekst is : <?php echo $result[0].' en de lengte van de tekst is : '. $result[1]?></p>


</body>
</html>