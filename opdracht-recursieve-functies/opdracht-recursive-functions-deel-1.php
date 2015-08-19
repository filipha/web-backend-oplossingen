<?php

		$baseAmount = 100000 ;
		$intrestRate = 8 ;
		$horizon = 10 ;

	function calculateProfit($baseAmount, $intrestRate, $horizon) {
		
		static $AmountIncrByYear = array () ;
		static $count = 1 ;
		
		if ($count <= $horizon ) {
			
			$baseAmountIntrest = floor ($baseAmount * ($intrestRate / 100)) ;
			$baseAmountOneYearLater = $baseAmount + $baseAmountIntrest ;
			$AmountIncrByYear [$count] = 'het bedrag na '.$count.' jaar  belegging : '.$baseAmountOneYearLater ;
			++$count ;
			
			return calculateProfit($baseAmountOneYearLater, $intrestRate, $horizon) ;
			
		} else {
			
		  // var_dump ($AmountIncrByYear) ;
		  return ($AmountIncrByYear) ;
		}
		
	}
		

$overview = calculateProfit ($baseAmount, $intrestRate, $horizon) ;	
	
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<ul>
	<?php foreach ($overview as $item) : ?>
	<li><?= $item?></li>
	<?php endforeach?>
<ul>
</body>
</html>