<?php
function create_smoothie ($id_rec, $id_fru, $id_jus, $id_sup)
{
    require "connexion.php";
    $req = $dbh->prepare('INSERT INTO smoothie(id_rec, id_fru, id_jus, id_sup)
                    VALUES(:id_rec, :id_fru, :id_jus, :id_sup)');
$req->execute(array(
	'id_rec' => $id_rec,
	'id_fru' => $id_fru,
	'id_jus' => $id_jus,
	'id_sup' => $id_sup
	));
};
