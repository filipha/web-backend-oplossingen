<?php

	session_start() ;
	//session_unset() ;

	$generatedPassword = '';

	if ( isset( $_SESSION['registration']['generatedPw']  ) )
	{
		$generatedPassword = $_SESSION['registration']['generatedPw'] ;
	}

	
?>
<!doctype HTML>
<html>
<head>
	<style>
		ul {
			list-style-type: none;
		}
		li {
			padding : 10px;
		}
		h2 {
			margin-left: 50px;
		}
	</style>
</head>
<body>
<h2>Registreren</h2>	
<form action="registratie-process.php" method="POST">
	<ul>
		<li><label for "email">email : </label><br><input type = "text" name ="email" value=""></li>
		<li><label for "paswoord">paswoord : </label><br><input type = "<?= ( $generatedPassword ) ? 'text' : 'password' ?>" name ="paswoord" value="<?= $generatedPassword ?>"><input type="submit" name="generatePassword" value="Aanmaken paswoord"></li>
		<li><input type="submit" name="submit" value="Registreer"></li>
	</ul>
</form>	
</body>
</html>