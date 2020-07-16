        <h2>Connectez -vous</h2>
        <form name="connection" method="post" action="controller/sign_in_2.php">
            Entrez votre pseudo : <input type="text" name="pseudo" placeholder="votre nom"/> <br/>
            Entrez votre mot de passe : <input type="password" name="mdp" placeholder="votre mot de  passe"/><br/>
            <input type="submit" name="valider" value="Envoyer"/>
        </form>
        <p>Vous n'avez pas de compte ? <a href="sign_up_form.php">Inscrivez vous</a>.</p>
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>