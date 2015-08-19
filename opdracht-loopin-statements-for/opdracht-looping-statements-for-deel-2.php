<?php
	$rows = 10 ;
	$colums = 10 ;
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
	.color {
		background-color : #009900 ;	
	}
	</style>
</head>
<body>
<table>
	<?php for ($countRow = 1 ; $countRow <= $rows ; ++$countRow) : ?>
		<tr>
			<?php for ($countCol = 1 ; $countCol <= $colums ; ++$countCol) : ?>
				<?php $cell = $countRow * $countCol ; ?>
				<td class="<?= ($cell%2 > 0) ? 'color': '' ?>"><?= $cell ?></td>
			<?php endfor ?>
		</tr>
	<?php endfor ?>
</table>'


</body>
</html>

</body>
</html>