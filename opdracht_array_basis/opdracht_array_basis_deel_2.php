<?php

	$numbersUp =  array( 1, 2, 3, 4, 5 );
	$numbersDown =  array( 5, 4, 3, 2, 1 );
	$product = array_product ($numbersUp);
	
	/* print odd numbers from array */
	
	foreach ($numbersUp as $numberUp) {
		
		if($numberUp%2 !== 0) {
			
			$oddNumbers[] = $numberUp ;
		}
	}
	var_dump ( $oddNumbers);
	
	
	/* multiply numbers with same index from both arrays */
	
	$numbersUp =  array( 1, 2, 3, 4, 5 );
	$numbersDown =  array( 5, 4, 3, 2, 1 );
	
	foreach ($numbersUp as $indexUp => $numberUp) {
		$number1 = $numberUp ;
		$number2 = $numbersDown [$indexUp];
		$sum[$indexUp] = $number1 + $number2;
		
	}
	var_dump($sum);
	
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
	</style>
</head>
<body>
<p>alle getallen vermenigvuldigd : <?= $product?></p>

</body>
</html>