<?php

	$boodschappenlijstje = array ('melk', 'boter', 'eieren') ;
	$count = 0 ;
	$counter = count( $boodschappenlijstje);
	var_dump($counter);
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
			<?php while ( isset($boodschappenlijstje[$count]) ): ?>

				<li><?php echo $boodschappenlijstje[$count] ?></li>

				<?php ++$count ?>

			<?php endwhile ?>
		</ul>
</body>
</html>