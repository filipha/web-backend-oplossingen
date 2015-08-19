<?php

	$articles = array (
			array (
			'title' => 'Pen detecteert Alzheimer',
			'datum' => '3 augustus 2015',
			'inhoud' => 'Door een eenvoudige pen te voorzien van artificiële intelligentie kunnen cognitieve aandoeningen, zoals Alzheimer en Parkinson, veel sneller gedetecteerd worden.',
			'afbeelding'  => 'images/alzheimer.png',
			'afbeeldingsbeschrijving' => 'hoe ziet een alzheimer patient de tijd'
			),
			array (
			'title' => 'Bitcoins moeten Grieken redden',
			'datum' => '6 augustus 2015',
			'inhoud' => 'Met de verschillende financiële maatregelen in Griekenland, staat de Middellandse Zee vele mensen aan de lippen. Kunnen bitcoins verlichting brengen?',
			'afbeelding'  => 'images/Bitcoin_accepted_here_printable.png',
			'afbeeldingsbeschrijving' => 'logo aanvaarden bitcoins'
			),
			array (
			'title' => 'Speelhal met virtual reality in Australië',
			'datum' => '9 augustus 2015',
			'inhoud' => 'Het Australische Melbourne pakt uit met een primeur: het heeft de allereerste speelhal voor virtual reality. En Zombies.',
			'afbeelding'  => 'images/virtual-reality-zombies-zero-latency.jpg',
			'afbeeldingsbeschrijving' => 'foto virtual reality speelhal '
			)
			
			);
			
			$individueelArtikel = FALSE ;
			
			if( isset( $_GET['id'] ) )
			{
				$individueelArtikel = TRUE ;
				$id = $_GET['id'];
				$artikel = $articles[ $id ];
			}
			
?>

<!doctype html>
<html>
<head>
	<title>Dit is de titel</title>
	<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="container">
	<header>

	</header>
	
	<nav>

	</nav>

	<div id="main">
	
	<?php if ( $individueelArtikel ): ?>
		<p>Individueel artikel</p>
		
		<h1><?= $artikel['title'] ?></h1>
		<p><?= $artikel['inhoud'] ?></p>
	<?php else: ?>
	
		<?php foreach ($articles as $id => $artikelArray) : ?>
			<h1><?= $artikelArray['title'] ?></h1>
			<p><?= $artikelArray['datum'] ?></p>
			<p><?= substr ($artikelArray['inhoud'], 0, 25) ?></p>
			<a href="opdracht-get.php?id=<?= $id ?>">lees meer</a><br>
			<img src= "<?= $artikelArray['afbeelding']?>" alt="<?= $artikelArray['afbeeldingsbeschrijving']?>">
		<?php endforeach ?>
	
	<?php endif ?>

	</div><!-- end main -->

	<footer>

	</footer>
	
</div><!-- end container -->
</body>
</html>