<?php

	session_start() ;

		//var_dump($_COOKIE) ;

	   	$mailFromCookie = $_COOKIE['login'];
	   	$extractedMailFromCookie = substr($mailFromCookie ,0,strrpos($mailFromCookie ,','));
	   	//var_dump( explode(',', $_COOKIE['login']) );
	   	$decodeCookie = explode(',', $_COOKIE['login']);
	   	var_dump($decodeCookie) ;
	   	//echo $extractedMailFromCookie ;

	   	$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login','root','');

		//$queryString = 'SELECT salt FROM users WHERE email LIKE "'. $extractedMailFromCookie . '"';
		$queryString = 'SELECT salt FROM users WHERE email LIKE :extractedMailFromCookie';
		//var_dump( $queryString );
		$statement = $db->prepare($queryString) ;
		$statement->bindValue(':extractedMailFromCookie', $extractedMailFromCookie) ;
		$statement->execute () ;

		$users = array () ;

		while ($row = $statement->fetch (PDO::FETCH_ASSOC))
		{
			$users[] = $row ;
		}

		var_dump($users);
		$saltFromDb = $users[0]['salt'] ;
		$concatSaltFromDbWithEmail = () ;
		

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
<h2>Dashboard</h2>	

</body>
</html>