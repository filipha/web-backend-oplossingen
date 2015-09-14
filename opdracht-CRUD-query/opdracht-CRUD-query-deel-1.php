<?php


    $messageContainer   =   '';

    try
    {

        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); // Connectie maken
        $messageContainer   =   'Connectie dmv PDO geslaagd.';

        $queryString    =   'SELECT *
                                FROM bieren 
                                INNER JOIN brouwers
                                ON bieren.brouwernr = brouwers.brouwernr
                                WHERE bieren.naam LIKE "Du%"
                                AND brouwers.brnaam LIKE "%a%"';

        $statement = $db->prepare( $queryString );

        $statement->execute( );

        $bieren =   array();

        while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $bieren[]   =   $row;
        }

        $columnNames    =   array();
        $columnNames[]  =   'Biernummer';

        foreach( $bieren[0] as $key => $bier )
        {
            $columnNames[  ]    =   $key;
        }

    }
    catch ( PDOException $e )
    {
        $messageContainer   =   'Er ging iets mis: ' . $e->getMessage();
    }
	//var_dump($bieren);
    
?>


<!doctype HTML>
<html>
<head>
	<title>Dit is de titel</title>
	<style>
        td {
           width : 150px;     
        }
	</style>
</head>
<body>

    <table><thead>
    <?php foreach ($bieren[0] as $kolomnr => $kolomData) : ?>
        <td><?= $kolomnr ?></td>
    <?php endforeach ?>
    </thead>

    <tbody>

    <?php foreach ($bieren as $kolomnr => $kolomData) : ?>
            <tr>
            <?php foreach ($kolomData as $kolomItem) : ?>
                <td><?= $kolomItem ?></td>
            <?php endforeach ?>
            </tr>
    <?php endforeach ?>

    </tbody> 

</table>

</body>
</html>