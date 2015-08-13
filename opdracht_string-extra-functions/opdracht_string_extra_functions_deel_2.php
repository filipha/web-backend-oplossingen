<?php
	$fruit = 'ananas';
	$tekstLengte	=	strlen( $fruit );
	$zoekLetter		= 	'a';
	$letterPositie	=	strrpos( $fruit, $zoekLetter );
	$hoofdletters	=	strtoupper( $fruit);
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>Tekst is <?php echo $fruit ?></p>
	<p>Tekstlengte is <?= $tekstLengte ?></p>
	<p>Positie letter a : <?php echo $letterPositie ?></p>
	<p>Nu alles in hoofdletters : <?php echo $hoofdletters ?></p>


</body>
</html>