<?php
	$fruit = 'kokosnoot';
	$tekstLengte	=	strlen( $fruit );
	$zoekLetter		= 	'o';
	$letterPositie	=	strpos( $fruit, $zoekLetter	);
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>Tekst is <?php echo $fruit ?></p>
	<p>Tekstlengte is <?= $tekstLengte ?></p>
	<p>Positie letter o : <?php echo $letterPositie ?></p>


</body>
</html>