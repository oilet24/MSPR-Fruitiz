<?php
require  "connexion.php";

$sql = file_get_contents('LMD/2020_04_21.sql');

try {
    $dbh->beginTransaction();
    $res = $dbh->exec($sql);
    $dbh->commit();
} catch(Exception $e) {
    $dbh->rollback();
    throw $e;
}
if (!$res) {
    echo "\nPDO::errorInfo():\n";
    print_r($dbh->errorInfo());
}
var_dump($sql);
