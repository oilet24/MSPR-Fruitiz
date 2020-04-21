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