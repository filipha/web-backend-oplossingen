<?php

	$username = 'stijn' ;
	$password = 'azerty' ;
	$message = '' ;

//var_dump ($GLOBALS) ;

if (isset ($_POST ['submit']))
	{
	 if ($_POST ['naam'] == $username && $_POST ['paswoord'] == $password ) {
		 
		$message = 'welkom' ;
		 
	 } else {
		 
		$message = 'probeer opnieuw' ;
	 }
		
	}
	//var_dump($_POST);
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<link href="css/main.css" type="text/css" rel="stylesheet">

	<style>
		label {
			width : 100px ;			
		}
	</style>
</head>
<body>
<form action="opdracht-post-deel-1.php" method="POST">
<p>Gelieve in te loggen</p>
<ul>
	<li><label for "naam">naam : </label><input type="text" name="naam" id="naam" value=""></li>
	<li><label for "paswoord">paswoord : </label><input type="password" name="paswoord" id="password" value=""></li>
	<li><input type="submit" name="submit" value="submit"></li>
</ul>
<p><?= $message?></p>
</form>

<?php

?>
</body>
</html>