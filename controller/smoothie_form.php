<?php
require_once "./model/connexion.php";               
?>
<form action="../controller/smoothie.php" method="POST">
  <?php
   require "form/recipient.php";               
  ?>
  <br><br><br>
  <?php
   require "form/fruit.php";               
  ?>
  <br><br><br>
  <?php
   require "form/jus.php";               
  ?>
  <br><br><br>
  <?php
   require "form/supplement.php";               
  ?>
  <br><br><br>
  <input type="submit" name="submit" value="Envoyer" />
</form>