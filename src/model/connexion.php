<?php

$db="mysql:host=localhost;dbname=fruitiz";
$user="root";
$password="";
try {
    $dbh = new PDO($db, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
//echo "\nPDO::errorInfo():\n";
//print_r($dbh->errorInfo());
/*
$bdh = new PDO('mysql==mariadb; mysql:host=localhost; dbname=foodies;charset=utf8', 'root', '');

*/
