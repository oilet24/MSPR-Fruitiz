<?php
      require "connexion.php";
      
      $sth = $dbh->prepare("SELECT * FROM fruit");
      $sth->execute();
      $donnees['id_fru'] ['nom_fru']= $sth->fetchALL(PDO::FETCH_ASSOC);
print_r($donnees['id_fru'] ['nom_fru']);
//echo $donnees['id_fru'] ['nom_fru'];
echo '<br><br>';


echo "a3 is: '".implode("','",$donnees['id_fru'] ['nom_fru'])."'<br>";
?>
