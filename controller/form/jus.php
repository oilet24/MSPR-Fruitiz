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