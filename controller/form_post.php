<?php

require "connexion.php";




$req = $dbh->prepare('INSERT INTO smoothie(id_rec, id_fru, id_jus, id_sup)
					VALUES(:id_rec, :id_fru, :id_jus, :id_sup)');
					
$req->execute(array(
	'id_rec' => $_POST['recipient'],
	'id_fru' => $_POST['fruit'],
	'id_jus' => $_POST['jus'],
	'id_sup' => $_POST['supplement']
	));

echo 'bien joué';
?>
/*

$req->execute(array(
	'id_rec' => '1',
	'id_fru' => '3',
	'id_jus' => '4',
	'id_sup' => '1',
));

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));



