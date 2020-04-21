<?php
require "connexion.php";               
?>


<form action="form_post.php" method="POST">

<select name="recipient">
        <?php
            $rep_rec = $dbh->query('SELECT * FROM recipient');
            while ($recipient = $rep_rec->fetch())
            {
        ?>
            <p>
                <option value="<?php echo $recipient['id_rec']; ?>"><?php echo $recipient['nom_rec']; ?></option>
            </p>
        <?php
            }
        ?>
    </select>
    <br><br><br>
    <select name="fruit">
        <?php
            $rep_fru = $dbh->query('SELECT * FROM fruit');
            while ($fruit = $rep_fru->fetch())
            {
        ?>
            <p>
                <option value="<?php echo $fruit['id_fru']; ?>"><?php echo $fruit['nom_fru']; ?></option>
            </p>
        <?php
            }
        ?>
    </select>
    <br><br><br>
    <select name="jus">
        <?php
            $rep_jus = $dbh->query('SELECT * FROM jus');    
                while ($jus = $rep_jus->fetch())
                {
            ?>
                <p>
                    <option value="<?php echo $jus['id_jus']; ?>"><?php echo $jus['nom_jus']; ?></option>
                </p>
            <?php
                }
            ?>
    </select>
    <br><br><br>
    <select name="supplement">
        <?php
            $rep_sup = $dbh->query('SELECT * FROM supplement');    
                while ($supplement = $rep_sup->fetch())
                {
            ?>
                <p>
                    <option value="<?php echo $supplement['id_sup']; ?>"><?php echo $supplement['nom_sup']; ?></option>
                </p>
            <?php
                }
            ?>
    </select>
    <br><br><br>
    <input type="submit" name="submit" value="Envoyer" />

</form>