<?php
var_dump($_GET);
	function __autoload ($className)
	{
		require_once ('classes/'.$className.'-class.php') ;
	}
	//$controller = $_GET['controller'] ;
	$method = $_GET['method'] ;

	switch ($method)
	{
		case 'overview' :
			$bieren = new Bieren () ;
			$showOnPage = $bieren->overview ;
			break ;
		case 'update' :
			$update = new Bieren () ;
			$showOnPage = $update->update ;
			break ;
		case 'insert' :
			$insert = new Bieren () ;
			$showOnPage = $insert->insert ;
			break ;
		default :
			$delete = new Bieren () ;
			$showOnPage = $delete->delete ;
			break ;
			
	}
	

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<h1>indexpagina</h1>
<?= $showOnPage  ?>
</body>
</html>