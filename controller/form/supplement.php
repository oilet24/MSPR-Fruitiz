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