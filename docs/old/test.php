<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruitiz</title>
    <link rel="stylesheet" href="css/wing.css">
</head>

<body>
<h1>C'est le moment de personnaliser votre Smoothie !</h1>
</body>


<select name="fruit">

<?php
    require "connexion.php";
    $reponse = mysql_query("SELECT id,nom FROM fruit");
    while ($donnees = mysql_fetch_array($reponse) )
    {
    $tab_fruit = array('xxxxxx');
?>

    <?php
        for($i=0;$i<count($tab_fruit);$i++)
        {
        if($tab_fruit[$i] == $fruit)
        { $selected = ' selected="selected" '; }
        else { $selected = ''; }
    ?> 
    <option value="<?php echo $tab_fruit[$i];?>"<?php echo $selected;?>><?php echo $tab_fruit[$i]; ?></option>
    <?php
    }
    }
    ?>
</select>


</html>