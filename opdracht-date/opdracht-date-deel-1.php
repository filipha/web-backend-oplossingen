<?php

	$timestamp		= mktime (22, 35, 25, 01, 21, 1904) ;
	$datum 			= date ('d F Y, g:i:s A',$timestamp);
	
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<p><?= $timestamp ?></p>
<p><?= $datum ?></p>
</body>
</html>