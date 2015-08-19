<?php

	session_start() ;
	
		
		
	if (isset($_POST ['submit'] )) {
		$_SESSION['straat'] = $_POST['straat'] ;
		$_SESSION['nummer'] = $_POST['nummer'] ;
		$_SESSION['gemeente'] = $_POST['gemeente'] ;
		$_SESSION['postcode'] = $_POST['postcode'] ;
		
		}
	var_dump($_POST);
	var_dump($_SESSION);	
	

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
	#container {
		margin : 0 auto ;
		width : 960px ;
	}
	h1 {
		margin-left : 40px ;
	}
	h3 {
		margin-left : 40px ;	
	}
	ul {
		list-style-type : none ;
	}
	li {
		margin-bottom : 10px;
	}
	#submit {
		margin-top : 20px;
	}
	</style>
</head>
<body>
<div id="container">
<h1>Overzicht</h1>
	<!--
	<form action="adresgegevens.php" method="POST">
	<ul>	
		<li><label for "e-mail">email :</label><br><input type="text" name="email" id="email" value=""></li>
		<li><label for "nickname">nickname :</label><br><input type="text" name="nickname" id="nickname" value=""></li>
		<li><input type="submit" name="submit" value="volgende" id="submit"></li>
	</ul>
	</form>
	-->
</div>
</body>
</html>