<?php
 
 	$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073' ;
 	$search =  '2' ;
 	$search2 =  '8' ;
 	$search3 =  'a' ;

 	function function1 ($search, $md5HashKey) {
 		$stringLength = strlen($md5HashKey) ;
 		$result = substr_count ($md5HashKey, $search) ;
 		$procent = ($result / $stringLength )*100 ;
 		return $procent ;
 	}
	
 	function function2 () {
		global $md5HashKey;
		global $search2;
		
 		$stringLength = strlen($md5HashKey) ;
 		$result = substr_count ($md5HashKey, $search2) ;
 		$procent = ($result / $stringLength )*100 ;
 		return $procent ;
 	}
	
	function function3 () {
		$md5HashKeyNew =  $GLOBALS ['md5HashKey'];
		$search3New =  $GLOBALS ['search3'];
		
 		$stringLength = strlen($md5HashKeyNew) ;
 		$result = substr_count ($md5HashKeyNew, $search3New) ;
 		$procent = ($result / $stringLength )*100 ;
 		return $procent ;
 	}

?>

<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>

	</style>
</head>
<body>
<?php 
$show1 = function1 ($search, $md5HashKey) ;
echo 'Het karakter '.$search.' komt '.$show1.'% voor in de tekst <br>' ;

$show2 = function2 () ;
echo 'Het karakter '.$search2.' komt '.$show2.'% voor in de tekst <br>' ;

$show3 = function3 () ;
echo 'Het karakter '.$search3.' komt '.$show3.'% voor in de tekst <br>' ;
?>
</body>
</html>