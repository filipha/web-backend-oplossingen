<?php

		$baseAmount = 100000 ;
		$intrestRate = 8 ;
		$horizon = 10 ;

	function calculateProfit($baseAmount, $intrestRate, $horizon) {
		
		$AmountIncrByYear = array () ;
		
		for ($count = 0 ; $count < $horizon ; ++$count) {
			
			$baseAmountIntrest = floor ($baseAmount * ($intrestRate / 100)) ;
			$baseAmountOneYearLater = $baseAmount + $baseAmountIntrest ;
			$AmountIncrByYear [$count] = 'het bedrag na '.$count.' jaar  belegging : '.$baseAmountOneYearLater ;
			
		}
		var_dump ($AmountIncrByYear) ;
	}
		

	
calculateProfit ($baseAmount, $intrestRate, $horizon) ;	
	
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