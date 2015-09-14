<?php


$imageFile = "img/Penguins.jpg" ;

$fileParts = pathinfo($imageFile) ;
$fileName = $fileParts['filename'];
$fileExtension = $fileParts['extension'];

$thumbDimensions['w'] = 100 ;
$thumbDimensions['h'] = 100 ;
//var_dump($thumbDimensions) ;

list($width, $height) = getimagesize($imageFile) ;
//$array = getimagesize($imageFile) ;
//var_dump($array) ;

	switch($fileExtension)
	{
		case ('jpg') :
		case ('jpeg') :
			$source = imagecreatefromjpeg($imageFile);
			break ;

		case ('png') :
			$source = imagecreatefrompng($imageFile);
			break ;

		case ('gif') :
			$source = imagecreatefromgif($imageFile);
			break ;

	}

$thumb = imagecreatetruecolor($thumbDimensions['w'], $thumbDimensions['h']) ;

imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumbDimensions['w'], $thumbDimensions['h'], $width, $height) ;

// Slaag het nieuwe canvas op (canvas, (folder).fileName, kwaliteit)

switch($fileExtension)
{
	case('jpg') :
	case('jpeg') :
		$convertedImage = imagejpeg($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension), 100) ;
		break ;

	case('png') :
	$convertedImage = imagepng($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension), 100) ;
	break ;

	case('gif') :
		$convertedImage = imagegif($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension)) ;
		break ;


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
<img src="<?= 'img/'.$fileName.'_thumb.jpg' ?>" alt="">
<form action="index.php" method="POST" enctype="multipart/form-data">
	<ul>
		<li><label for "file"></label><input type="file" name="file"></li>
		<li><input type="submit" name="submit" value="upload"></li>
	</ul>
</form>	
</body>
</html>