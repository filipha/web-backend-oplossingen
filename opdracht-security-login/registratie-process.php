<?php

	session_start () ;
	$cookie_set = FALSE ;


	if(isset($_POST['submit'])) {


	try {

		$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login','root','');
		//echo 'connection ok' ;
		/*$queryString = 'SELECT * FROM users';
		$statement = $db->prepare($queryString) ;
		$statement->execute () ;

		$users = array () ;

		while ($row = $statement->fetch (PDO::FETCH_ASSOC))
		{
			$users[] = $row ;
		}
		*/
		var_dump( $_POST );

		$email		=	$_POST['email'];
		$password	=	$_POST['paswoord'];

		$salt = uniqid(mt_rand(), true) ;
		$saltAndPw = $salt.$password ;
		$hashedPassword = hash('sha512', $saltAndPw) ;
		$lastLoginTime = date("Ymd");

	
		$addUser = 'INSERT INTO users (email, salt, hashed_password, last_login_time)
			 VALUES (:email, :salt, :hashed_password, :last_login_time)';

		$statement = $db->prepare($addUser) ;

		$statement->bindValue(':email', $email) ;
		$statement->bindValue(':salt', $salt) ;
		$statement->bindValue(':hashed_password', $hashedPassword) ;
		$statement->bindValue(':last_login_time', $lastLoginTime) ;

		$addedToUsers = $statement->execute () ;
		
		//var_dump($_SESSION);

		$saltAndEmail = $salt.$email ;
		$hashedSaltAndEmail = hash('sha512', $saltAndEmail) ;
		//echo $hashedSaltAndEmail ;
		
		$cookie_name = 'login' ;
		$loginCookie = setcookie( $cookie_name, $email.','.$hashedSaltAndEmail, time() + 3600*24*30 );
		$cookie_set = TRUE ;

		if(isset($loginCookie)) {

    		header( 'location: dashboard.php' );

		} else {

			header( 'location: index.php' );
		}

	}
	catch (PDOException $e)
	{

		echo 'connection NOT ok'  ;
	}


		$_SESSION['registration']['email'] = $_POST['email'];
		$_SESSION['registration']['password'] = $_POST['paswoord'];

		//var_dump($_SESSION);
	}

	if(isset($_POST['generatePassword'])) {

		$_SESSION['registration']['generatedPw'] = generatePassword() ;
		$password = $_SESSION['registration']['generatedPw'] ;
		header( 'location: index.php' );
		var_dump($_SESSION);
	}

	function generatePassword( $length = 8 )
		{
    		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    		$password = substr( str_shuffle( $chars ), 0, $length );
    		return $password;
		}

	
?>