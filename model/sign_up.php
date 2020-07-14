<?php
function create_user ($nom_use, $mail_use, $tel_use, $vil_use, $mdp_use)
{
    require_once "connexion.php";
    $req = $dbh->prepare('INSERT INTO compte(nom_use, mail_use, tel_use, vil_use, mdp_use)
                    VALUES(:nom_use, :mail_use, :tel_use, :vil_use, :mdp_use)');
$req->execute(array(
	'nom_use' => $nom_use,
	'mail_use' => $mail_use,
	'tel_use' => $tel_use,
	'vil_use' => $vil_use,
	'mdp_use' => $mdp_use
	));
};