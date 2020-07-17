<?php
require_once "model/connexion.php";
require_once "view/header.php";

//require "controller/sign_up_form.php";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    require "controller/sign_in_form.php";
}


//require "controller/sign_up_form.php";
require "controller/smoothie_form.php";
//require "sign_in.php";
require "view/footer.php";
?>
