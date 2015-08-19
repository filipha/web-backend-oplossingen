<?php
	$var = 'on';
	if ($var == 'on') {
		$color = ".color-on";
	} 
	else
	{
		$color = ".color-off";
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
	.color-on { color : red;}
	.color-off { color : green;}
	</style>
</head>
<body>
<p class="<?= ($var == 'on') ? "color-on" : "color-off" ?>"><?= ($var == 'on') ? "ON" : "OFF" ?></p>


</body>
</html>