<!DOCTYPE HTML>
<html>
    <head>
        <title>FRUITIZ - Le premier site web qui permet de créer son propre smoothie !</title>
        <meta charset="UTF8">
        <meta initial-scale="1.0">
        <link rel="icon" href="view/svg-12-512.ico">
        <link href="view/css/main.css" rel="stylesheet">
    </head>

    <navbar>
        <a href="../controller/sign_up_form.php">Inscrivez vous</a>
        <a href="../controller/sign_in_form.php">Connectez vous</a>
        <a href="../controller/logout.php">Se déconnectez</a>

</navbar>
        <header>
        <h1>Bienvenue sur FRUITIZ</h1>
        <h2>Le premier site web qui permet de créer son propre smoothie !</h2>
        <?php 
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            print("vous êtes connecté");
            } else {
                print("pas connecté");
            }
        ?>
        </header>

        <body>




