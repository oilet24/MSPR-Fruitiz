
<?php
require_once "./model/connexion.php";               
?>
<form id="formu" action="controller/smoothie.php" method="POST">
<div id="recipient">
  <label for="recipient">
    Choissisez la taille de votre smoothie :
  </label>
  <?php
   require "form/recipient.php";               
  ?>
</div>
<div id="fruit">
  <label for="fruit">
    Choissisez le fruit de votre smoothie :
  <?php
   require "form/fruit.php";               
  ?>
</div>
<div id="jus">
  <label for="jus">
    Choissisez le jus de votre smoothie :
</label>
  <?php
   require "form/jus.php";               
  ?>
</div>
<div id="supplement">
  <label for="supplement">
    Choissisez, si vous le souhaitez, un supplément :
</label>
  <?php
   require "form/supplement.php";               
  ?>
</div>
<div id="bout">
  <label for="submit">
    Il ne vous reste plus qu'a envoyer :  
</labem>
  <input type="submit" name="submit" value="Envoyer" />
</div>
</form>