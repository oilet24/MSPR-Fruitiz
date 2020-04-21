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