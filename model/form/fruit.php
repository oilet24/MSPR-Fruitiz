<?php

public function fruit()
{
    require "../connexion.php";
    $rep_fru = $dbh->query('SELECT * FROM fruit');
}