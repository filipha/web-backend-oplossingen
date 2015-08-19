<?php

	$getallen =  array(8,7,8,7,3,2,1,2,4);
	$uniekeGetallen = array_unique ( $getallen ) ;
	$sorted = $uniekeGetallen ;
	rsort ( $sorted) ;
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
	</style>
</head>
<body>
<?=
var_dump ($getallen);
var_dump ($uniekeGetallen);
var_dump ($sorted);


?>
</body>
</html>