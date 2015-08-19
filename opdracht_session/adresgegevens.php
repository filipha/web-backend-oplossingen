<?php

	session_start() ;
	
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
<h1>Adresgegevens</h1>

	<form action="overzicht.php" method="POST">
	<ul>
		<li><label for "straat">straat :</label><br><input type="text" name="straat" id="straat" value=""></li>
		<li><label for "nummer">nummer :</label><br><input type="text" name="nummer" id="nummer" value=""></li>
		<li><label for "gemeente">gemeente :</label><br><input type="text" name="gemeente" id="gemeente" value=""></li>
		<li><label for "postcode">postcode :</label><br><input type="text" name="postcode" id="postcode" value=""></li>
		<li><input type="submit" name="submit" value="volgende" id="submit"></li>
	</ul>
	</form>

</div>
</body>
</html>