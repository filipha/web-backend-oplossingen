<?php

    $regEx = '';
    $result = FALSE;


if(isset ($_POST['submit']))
{
    $inputString = ($_POST['string']) ;
    $regEx = ($_POST['regEx']) ;
    $replaceString = '#' ;
    //echo $inputString.'<br>' ;
    //echo $regEx.'<br>' ;
    $result = preg_replace('/'.$regEx.'/', $replaceString, $inputString) ;
    //echo $result ;
    
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
<form action="index.php" method="POST">
    <label for "regEx">Regular Expression</label><br><input type="text" name="regEx"><br>
    <label for "string">String</label><br><input type="text" name="string" value=""><br>

    <input type="submit" name="submit" value="submit">

</form>

    <?php if ( $result ): ?>
        <p><?= $result ?></p>
    <?php endif ?>

    <p><em>Match alle letters tussen a en d, en u en z (hoofdletters inclusief)</em></p>
    <p>regular expression : [a-du-zA-DU-Z]</p>
    <p>string : Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.</p>
    
    <p><em>Match zowel colour als color : </em></p>
    <p>regular expression : colou?r </p>
    <p>string : Match zowel colour als color.</p>

    <p><em>Match enkel de getallen die een 1 als duizendtal hebben : </em></p>
    <p>regular expression : ^1[0-9]{4}</p>
    <p>string : 1020 1050 9784 1560 0231 1546 8745</p>


</body>
</html>