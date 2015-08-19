<?php
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => ' ',
    'fruit4' => ' ',
    'fruit5' => 'apple');

    for ($i = 0; $i <  count($array); $i++) {
    $key=key($array);
    $val=$array[$key];
    if ($val<> ' ') {
       echo $key ." = ".  $val ." <br> ";
       }
     next($array);
    }

/*
fruit1 = apple
fruit2 = orange
fruit5 = apple
*/
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<?php

?>
</body>
</html>