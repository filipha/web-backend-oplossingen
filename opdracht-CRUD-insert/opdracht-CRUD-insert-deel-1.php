<?php

$message    =   '';
$conn_error =   'No connection to database';

if (isset($_POST['submit'])) {
    //echo 'daar ben je al';
    try {

            $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'r' );
            
            $brouwerInsert =   'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
                                        VALUES ( :brnaam, :adres, :postcode, :gemeente, :omzet )';

            $brouwerStatement = $db->prepare( $brouwerInsert );

            $brouwerStatement->bindParam( ':brnaam', $_POST[ 'brnaam' ] );
            $brouwerStatement->bindParam( ':adres', $_POST[ 'adres' ] );
            $brouwerStatement->bindParam( ':postcode', $_POST[ 'postcode' ] );
            $brouwerStatement->bindParam( ':gemeente', $_POST[ 'gemeente' ] );
            $brouwerStatement->bindParam( ':omzet', $_POST[ 'omzet' ] );

            $addedToDb = $brouwerStatement->execute();
            

            if ($addedToDb)
            {
                   $message = 'Brouwerij is toegevoegd' ;
            }
            else
            {
                    throw new Exception('Error');
                    
            }
        
    } catch (Exception $ex)

    {

                    $message = 'Brouwerij is niet toegevoegd' ;
    }

}

?>


<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
        ul {
            list-style-type: none;
        }
        #submit {
            margin-top : 20px ;            
        }
        p {
            margin-left: 30px;
        }
	</style>
</head>
<body>
<p>brouwer toevoegen</p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <ul>
        <li>
            <label for "brnaam">Brouwernaam : </label><br>
            <input type="text" name="brnaam" id="brnaam">
        </li>
        <li>
            <label for "adres">adres: </label><br>
            <input type="text" name="adres" id="adres">
        </li>
        <li>
            <label for "postcode">postcode : </label><br>
            <input type="text" name="postcode" id="postcode">
        </li>
        <li>
            <label for "gemeente">gemeente : </label><br>
            <input type="text" name="gemeente" id="gemeente">
        </li>
        <li>
            <label for "omzet">omzet : </label><br>
            <input type="text" name="omzet" id="omzet">
        </li>
        <li>
            <input type="submit" name="submit" id="submit" value="verzenden">
        </li>   
    </ul>
       
</form>    

<p><strong><?= $message ?></strong></p>

</body>
</html>