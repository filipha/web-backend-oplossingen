<?php


    $messageContainer   =   '';

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); 
        if ( isset( $_POST['delete'] ) )
        {
            $deleteQuery    =   'DELETE FROM brouwers
                                    WHERE brouwernr = :brouwernr';

            $deleteStatement = $db->prepare( $deleteQuery );

            $deleteStatement->bindParam( ':brouwernr', $_POST['delete'] );

            $isDeleted  =   $deleteStatement->execute();

            if ( $isDeleted )
            {
                echo 'De datarij werd goed verwijderd.';
            }
            else
            {
                
                echo 'De datarij kon niet verwijderd worden';
            }
            
        }


        //$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); 
        $messageContainer   =   'Connectie dmv PDO geslaagd.';

        $queryString    =   'SELECT * FROM brouwers' ;

        $statement = $db->prepare( $queryString );

        $statement->execute( );

        $brouwers =   array();

        while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
        {
            $brouwers[]   =   $row;
        }

        $columnNames    =   array();
        $columnNames[]  =   'Brouwernummer';

        foreach( $brouwers[0] as $key => $bier )
        {
            $columnNames[  ]    =   $key;
        }

    }
    catch ( PDOException $e )
    {
        $messageContainer   =   'Er ging iets mis: ' . $e->getMessage();
    }
    //var_dump($brouwers);
    


?>


<!doctype HTML>
<html>
<head>
    <title>Dit is de titel</title>
    <style>
        td {
           
            border : 1px solid #000;   
        }
       
    </style>
</head>
<body>
    <form action = "opdracht-CRUD-delete-deel1.php" method = "POST">
    <table><thead>
    <?php foreach ($brouwers[0] as $kolomnr => $kolomData) : ?>
        <td><?= $kolomnr ?></td>
    <?php endforeach ?>
    </thead>

    <tbody>

    <?php foreach ($brouwers as $nummer => $brouwer) : ?>
            <tr>
            <?php foreach ($brouwer as $kolomValue) : ?>
                <td><?= $kolomValue ?></td>
            <?php endforeach ?>
            <td><button type="submit" name="delete" value="<?= $brouwer['brouwernr'] ?>"><img src="icon-delete.png" alt=""></td>
            </tr>
    <?php endforeach ?>

    </tbody> 

</table>
</form>
</body>
</html>