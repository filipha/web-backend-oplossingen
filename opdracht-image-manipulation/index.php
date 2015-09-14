<?php

		$showImage = FALSE ;

		if (isset($_POST['submit']))
		{


			if($_FILES['file']['type'] == "image/jpeg")
			{

				define('ROOT', dirname(__FILE__));
				$imagesFolder 	= 'img' ;
				$path 			= ROOT.'/'.$imagesFolder.'/' ;

				move_uploaded_file($_FILES["file"]["tmp_name"], ($path.$_FILES["file"]["name"]));

				
				//$imageFile = "img/Penguins.jpg" ;

		    	 	
		    	$imageFile = 'img/'.$_FILES['file']['name'];
				$fileParts = pathinfo($imageFile) ;
				$fileName = $fileParts['filename'];
				$fileExtension = $fileParts['extension'];

				$thumbDimensions['w'] = 100 ;
				$thumbDimensions['h'] = 100 ;
				//var_dump($thumbDimensions) ;

				list($width, $height) = getimagesize($imageFile) ;

				$dimensionsOriginal = getimagesize($imageFile) ;
				//var_dump($dimensionsOriginal) ;
				$dimensionOriginalWidth = $dimensionsOriginal[0] ;
				$dimensionOriginalHeight = $dimensionsOriginal[1] ;

				if($dimensionOriginalWidth > $dimensionOriginalHeight)
				{
					$longSide = $dimensionOriginalWidth ;
					$shortSide = $dimensionOriginalHeight ;
					$xPosition = ($longSide - $shortSide) / 2 ;
					$yPosition = 0 ;
					echo 'landscape';

				} elseif ($dimensionOriginalWidth < $dimensionOriginalHeight)
				{
					$longSide = $dimensionOriginalHeight ;
					$shortSide = $dimensionOriginalWidth ;
					$xPosition = 0 ;
					$yPosition = ($longSide - $shortSide) /2 ;
					echo 'portrait' ;

				} else {
					$longSide = $dimensionOriginalHeight ;
					$shortSide = $dimensionOriginalWidth ;
					$xPosition = ($longSide - $shortSide) /2 ;
					$yPosition = 0 ;
					echo 'vierkant' ;
				}


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
				//imagecopyresized(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
				imagecopyresized($thumb, $source, 0, 0, $xPosition, $yPosition, $thumbDimensions['w'], $thumbDimensions['h'], $height, $height) ;

				switch($fileExtension)
				{
					case('jpg') :
					case('jpeg') :
						$convertedImage = imagejpeg($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension), 100) ;
						$showImage = TRUE ;
						//var_dump($showImage);
						break ;

					case('png') :
						$convertedImage = imagepng($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension), 100) ;
						$showImage = TRUE ;		
						break ;

					case('gif') :
						$convertedImage = imagegif($thumb, ('img/'.$fileName.'_thumb'.'.'.$fileExtension)) ;
						$showImage = TRUE ;	
						break ;

					
				}

			}
			else
			{

				echo 'kies ander bestandstype' ;
			}

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
		h2, img {
			margin-left: 50px;
		}
	</style>
</head>
<body>
<h2>Bestand uploaden</h2>
<img src="<?= ($showImage)? 'img/'.$fileName.'_thumb.jpg' : '' ?>" alt="">
<form action="index.php" method="POST" enctype="multipart/form-data">
	<ul>
		<li><label for "file"></label><input type="file" name="file"></li>
		<li><input type="submit" name="submit" value="upload"></li>
	</ul>
</form>	
</body>
</html>