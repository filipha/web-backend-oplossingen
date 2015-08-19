<?php
	
	$getal1 = 1 ;
	$getal2 = 100 ;
/*	
	while( $getal1 <= $getal2) {
		echo $getal1 . ',';
		++$getal1;
	}
*/
	
	$getal3 = 1 ;
	$getal4 = 100 ;	

	while( $getal3 <= $getal4) {
		if ( $getal3%3 == 0 && $getal3 > 40 && $getal3 > 80) {
			echo $getal3 . ',';
		}
		++$getal3;
	}
	
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
	</style>
</head>
<body>

</body>
</html>