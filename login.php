<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="longin.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <a href="index.php">Accueil</a>
</head>
<body>


<div class="block-inscription">
    <form action="traitementlogin.php" method="post">
        <h2 class="fa-solid fa-seedling"> Se Connecter</h2>
        <div class="users-infos">
            <input type="email" placeholder="E-mail" name="Mail">
            <br><br>
            <input type="password" placeholder="Mot de passe" name="Mdp">
            <br>
            <br>
            <a href="newuser.php">Créer un compte</a>
            <br>
            <br>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</div>

</body>
</html>