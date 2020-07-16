<html>
    <body>
        <h2>Commencez-donc par vous inscrire :</h2>
        <form name="inscription" method="post" action="controller/sign_up.php">
            Entrez votre pseudo : <input type="text" name="pseudo" placeholder="votre nom"/> <br/>
            Entrez votre mail : <input type="email" name="mail" placeholder="votre mail"/> <br/>
            Entrez votre téléphone : <input type="tel" name="tel" placeholder="votre telephone"/> <br/>
            Entrez votre adresse : <input type="text" name="adresse" placeholder="votre adresse"/> <br/>
            Entrez votre ville : <input type="text" name="ville" placeholder="votre ville"/> <br/>
            Entrez votre mot de passe : <input type="password" name="mdp" placeholder="votre mot de  passe"/><br/>
            <input type="submit" name="valider" value="Envoyer"/>
        </form>
        <p>Vous avez déja  un compte ? <a href="login.php">Connectez vous</a>.</p>
    </body>
</html>