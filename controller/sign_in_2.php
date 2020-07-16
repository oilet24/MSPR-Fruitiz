<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
require_once "../model/connexion.php";
$dbh = mysqli_connect($db, $user, $password,$name)
or die('could not connect to database');

{
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM compte where 
              nom_use = '".$username."' and mdp_use = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['nom_use'] = $username;
           header('Location: ../index.php');
        }
}
else
{
   header('Location: ../index.php');
}}
mysqli_close($dbh); // fermer la connexion