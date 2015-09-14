<?php

	//var_dump($_FILES) ;
	try
	{
	
		$showImage = FALSE ;

		if (isset($_POST['submit']))
		{


			if($_FILES['file']['type'] == "image/jpeg")
			{

				define('ROOT', dirname(__FILE__));
				$imagesFolder 	= 'img' ;
				$path 			= ROOT.'/'.$imagesFolder.'/' ;

				move_uploaded_file($_FILES["file"]["tmp_name"], ($path.$_FILES["file"]["name"]));


				$email = $_POST['email'] ;
				$imageName = $_FILES['file']['name'];
				
				$db = new PDO('mysql:host=localhost;dbname=profiles','root','');
				//echo 'connection ok' ;

				$profilesQuery =   'INSERT INTO
										users (email, profile_picture)
		                                VALUES
		                                ( :email, :profile_picture)';

		   		$profilesStatement = $db->prepare( $profilesQuery );

			    $profilesStatement->bindParam( ':email', $_POST[ 'email' ] );
		 		$profilesStatement->bindParam( ':profile_picture', $_FILES['file']['name'] );

		    	$addedToDb = $profilesStatement->execute();

		    	$showImage = TRUE ;
		    	//echo $fullPath = $path.''.$imageName ;

			}
			else
			{

				echo 'kies ander bestandstype' ;
			}

		}
			
	}
	catch ( Exception $e )
	{

	echo 'connection NOT ok'  ;
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
		.image {
			margin-left: 50px ;
			max-width: 150px ;
		}
	</style>
</head>
<body>
<h2>Gebruiker toevoegen</h2>
<img class = "image" src = " <?= ($showImage)? 'img/'.$imageName :'' ?> " alt="">	
<form action="index.php" method="POST" enctype="multipart/form-data">
	<ul>
		<li><label for "email">email : </label><br><input type = "text" name ="email" value=""></li>
		<li><label for "file"></label><input type="file" name="file"></li>
		<li><input type="submit" name="submit" value="upload"></li>
	</ul>
</form>	
</body>
</html>