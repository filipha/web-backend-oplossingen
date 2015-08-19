<?php

/*gegevens inlezen uit tekstbestand*/
	$getFile = file_get_contents ('info.txt');
	$userdata = explode(',',$getFile) ;
	$message = '' ;

	//var_dump ($userdata) ;
	//var_dump ($_POST) ;

	$IsAuthenticated = FALSE ;
	
	if (!isset($_COOKIE['authenticated'])) {
		
				if (isset($_POST ['submit'] )) {
	
				if ($userdata[0] == $_POST ['gebruikersnaam'] && $userdata[1] == $_POST ['paswoord'] ) {
					$message = ' U bent ingelogd' ;
					setcookie( 'authenticated', TRUE, time() + 60 );
					header('location: opdracht_cookies.php');
				} else {
	
					$message = 'gebruikersnaam of paswoord niet correct' ;
				}
			}	
		
	} else {
		
		$message = 'U bent aangemeld' ;
		$IsAuthenticated = TRUE ;
	}
	
	if (isset($_GET['afmelden'])) {
		
		setcookie( 'authenticated', '', time() - 10 );
		header('location: opdracht_cookies.php');
	}

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
<h1>Inloggen</h1>
<h3><?= $message ?></h3>
<?php if (!$IsAuthenticated) : ?>
	<form action="opdracht_cookies.php" method="POST">
	<ul>
		<li><label for "gebruikersnaam">gebruikersnaam :</label><br><input type="text" name="gebruikersnaam" id="gebruikersnaam" value=""></li>
		<li><label for "paswoord">paswoord :</label><br><input type="paswoord" name="paswoord" id="paswoord" value=""></li>
		<li><input type="submit" name="submit" value="submit" id="submit"></li>
	</ul>
	</form>

<?php else : ?>
	<a href="opdracht_cookies.php?afmelden=TRUE">uitloggen</a>
<?php endif ?>
</div>
</body>
</html>