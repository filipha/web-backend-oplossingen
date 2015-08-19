<?php

	/* opdracht 1*/

	$dieren = array ('hond', 'kat', 'muis') ;

	
	function drukArrayAf ($dieren) 
	{
		$container = array ();
		/*
		$dierenLength = count ($dieren);
		for ($count = 0 ; $count < $dierenLength ; ++$count) {
				$container[$count] = 'heeft als naam '.$dieren [$count] ;
		}
		*/
		foreach ($dieren as $key => $value) {

			$container[] =  'op positie '.$key.' staat '.$value ;
		}
		return($container);
	}
	
$lijst = drukArrayAf ($dieren) ;

	/* opdracht 2*/

	$html = '</html>' ;
	function validateHtmlTag ($html) {
		if ($html == '<html>' || $html == '</html>') {
			$antwoord = 'De tag is gevonden in de string' ;
		} else {
			$antwoord = 'De tag is niet gevonden in de string' ;
		}
		return $antwoord ;
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

<?php foreach ($lijst as $value) : ?>
	<p><?= $value ?></p>
<?php endforeach ?>


<?= validateHtmlTag ($html) ?>

</body>
</html>