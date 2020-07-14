<?php

$nom_use = $_POST['pseudo'];
$mail_use = $_POST['mail'];
$tel_use = $_POST['tel'];
$adr_use = $_POST['adresse'];
$vil_use = $_POST['ville'];
$mdp_use = $_POST['mdp'];


require "../model/sign_up.php";


try {
    create_user ($nom_use, $mail_use, $tel_use, $vil_use, $mdp_use);
    
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>
