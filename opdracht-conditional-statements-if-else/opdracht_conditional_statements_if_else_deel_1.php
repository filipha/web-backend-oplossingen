<?php
	$jaartal = 1913;
	$schrikkeljaar = false ;

	if (($jaartal%4 == 0) && ($jaartal%100 !== 0) || ($jaartal%400 == 0)) 
	{
		$schrikkeljaar = true;
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>Het jaartal <?php echo $jaartal ?> is <?php echo ($schrikkeljaar) ? "een" : "geen" ?> schrikkeljaar !</p>

</body>
</html>