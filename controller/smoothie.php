<?php


// 1. lire les données du POST et les mettre dans des variables
$id_rec = $_POST['recipient'];
$id_fru = $_POST['fruit'];
$id_jus = $_POST['jus'];
$id_sup = $_POST['supplement'];
// 2. require model/smoothie.php
require "../model/smoothie.php";

// 3. appeler la fonction de model/smoothie.php qui permet de faire l'insertion
try {
    create_smoothie ($id_rec, $id_fru, $id_jus, $id_sup);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

// 4. require view/smoothie.php
// 5. appeler la fonction de view/smoothie.php qui affiche un smoothie en html
?>
