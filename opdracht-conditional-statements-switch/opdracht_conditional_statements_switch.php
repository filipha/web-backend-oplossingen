<?php
	$getal = 5;
	
	switch ( $getal ) 
	{
	
		case 1:
			$antwoord = "maandag";
			break;
		case "2":
			$antwoord = "dinsdag";
			break;
		case "3":
			$antwoord = "woensdag";
			break;
		case "4":
			$antwoord = "donderdag";
			break;
		case "5":
			$antwoord = "vrijdag";
			break;
		case "6":
			$antwoord = "zaterdag";
			break;
		case "7":
			$antwoord = "zondag";
			break;
		default:
			$antwoord = "geen dag overeenkomstig een getal";
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
</head>
<body>
	<p>De <?php echo $getal?>de dag van de week is <?php echo $antwoord?></p>



</body>
</html>