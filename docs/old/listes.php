<?php






require  "connexion.php";

$aliment_tab=array();
$requete="select * FROM aliment";
$valeur=mysql_query($requete);
$i=0;
$ligne=0;
    while($tableau=mysql_fetch_array($valeur)){
        print($ligne);
        if($tableau['actif']>"N"){
            $aliment_tab[$i]['iud']=$tableau['iud'];
            $aliment_tab[$i]['nom']=$tableau['nom'];
            $aliment_tab[$i]['unite']=$tableau['unite'];
        $i=$i+1;    
    }
    else{
        print('Catégorie non active');
    }
    }
$ligne=$i;

?>
<form method="POST">
<select size="1" name='iud'>;
while ($i<$ligne){
$iud= $aliment_tab[$i]['iud'];
$complet= $aliment_tab[$i]['nom'];
$liste=$liste.<option value.$uid.>.$nom.</option>;
$i=$i+1
}
$liste=$liste.
<input type="submit" value="Envoyer" name="go">
</form>
<HR>;
echo$liste;
?>