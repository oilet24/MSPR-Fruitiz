<?php

//$objectPdo = new PDO('mysql:host=localhost;dbname=frigo','root','');
require  "connexion.php";

$pdoStat = $dbh->prepare('select * FROM fruit');


$executeIsOk = $pdoStat->execute();


$aliment = $pdoStat->fetchAll();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruitiz</title>
    <link rel="stylesheet" href="css/wing.css">
</head>

<body>
<h1>Liste de fruit</h1>

<ul>
    <?php foreach ($aliment as $aliment): ?>
        <li>
            <?= $aliment['nom_fru'] ?>
        </li>    
    <?php endforeach; ?>
</ul>

</body>
</html>