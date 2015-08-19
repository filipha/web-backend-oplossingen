<?php

	$dieren =  array( 'vis', 'hond', 'kat', 'paard', 'eend' );
	$zoogdieren = array ('koe', 'varken', 'wolf');
	$dierenLijst = array_merge ( $dieren, $zoogdieren) ;
	
	$aantalDieren = count ( $dieren ) ;
	$teZoekenDier = 'eend' ;

	if( in_array( $teZoekenDier, $dieren ) ) 
	{
		$resultaat = $teZoekenDier . ' is gevonden in de lijst van dieren!';
	}
	else 
	{
		$resultaat = $teZoekenDier . ' kon niet teruggevonden worden in de lijst van dieren!';
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

<p>aantal dieren in de array is : <?= $aantalDieren ?> </p>
<p>het dier waarnaar gezocht werd "<?= $teZoekenDier ?>" : <?= $resultaat ?> </p>

<?=
	sort ($dieren);
	$lengte = count($dieren);
	for($x = 0; $x <  $lengte; $x++) {
		echo $dieren[$x];
		echo "<br>";
	}
?>
<?= var_dump ($dierenLijst) ?>

</body>
</html>