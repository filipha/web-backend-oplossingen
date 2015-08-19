<?php

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
		td { 
			border : 1px solid #000 ;
			padding : 5px;
		}

	</style>
</head>
<body>
<?php
	$rows = 10 ;
	$colums = 10 ;
	echo '<table>';
	for ($countRow = 1 ; $countRow <= $rows ; ++$countRow) {
		echo '<tr>' ;
			for ($countCol = 1 ; $countCol <= $colums ; ++$countCol) {
				$cell = $countRow * $countCol ;
				echo '<td>'.$cell.'</td>' ;
			}
		echo'</tr>' ;
	}
	echo '</table>';
?>

</body>
</html>