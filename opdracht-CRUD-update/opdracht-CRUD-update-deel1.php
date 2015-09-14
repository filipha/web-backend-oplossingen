<?php


    $messageContainer   =   '';
    
    try
    {

        $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', ''); 
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
    <p>brouwerij wijzigen</p>
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

    
<form action = "<?= $_SERVER['PHP_SELF'] ?>" method = "POST">
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
            <td><button type="submit" name="edit" value="<?= $brouwer['brouwernr'] ?>"><img src="icon-edit.png" alt=""></td>
            </tr>
    <?php endforeach ?>

    </tbody> 

    </table>
</form>
</body>
</html>