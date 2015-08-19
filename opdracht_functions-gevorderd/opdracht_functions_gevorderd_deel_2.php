<?php
	$pigHealth = '5' ;
	$maximumThrows = '8' ;
	$gamePlay = array() ;

	function calculateHit() {
		
		global $pigHealth ;
		$hitMsg = array () ;
		$hitRate = rand (1, 10);
		$isHit = ( $hitRate <= 4) ? TRUE : FALSE ;
		
		if ( $isHit ) {
			
			-- $pigHealth ;
			$hitMsg ['hit'] = TRUE ;
			$hitMsg ['message'] = 'Raak! Er zijn nog maar '.$pigHealth.' varkens over.' ;
			
		} else {
			$hitMsg ['hit'] = FALSE ;
			$hitMsg ['message'] = 'Mis! Nog '.$pigHealth.' varkens in het team.' ;
			
		}
		return $hitMsg ;	
	}
	
	function launchAngryBird() {
		
		global $maximumThrows ;
		global $pigHealth ;
		global $gamePlay ;
		
		if ( $maximumThrows !== 0 && $pigHealth !== 0) {
			
			--$maximumThrows;
			$resultMsg = calculateHit () ;
			$gamePlay [] = $resultMsg ['message'] ;
			launchAngryBird () ;
			
		} else {
			
			if ($pigHealth > 0) {
				
				$gamePlay [] = 'Verloren' ;
				
			} else {
				
				$gamePlay [] = 'Gewonnen' ;
				
			}
						
		}
		
	}
	
launchAngryBird () ;

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<?php foreach ($gamePlay as $game) : ?>
<p><?= $game ?></p>
<?php endforeach ?>
</body>
</html>