<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="newuser.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="register">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form" action="traitementnewuser.php" method="post">
        <h2 class="fa-solid fa-seedling"> Creer un compte</h2>
        <div class="info">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <br>
            <br>
            <input type="text" id="nomdefamille" name="nom" placeholder="Nom">
            <br>
            <br>
            <input type="email" id="email" name="email" placeholder="E-mail">
            <br>
            <br>
            <input type="text" id="number" name="tel" placeholder="Numéro de téléphone">
            <br>
            <br>
            <input type="text" id="adresse" name="poste" placeholder="Adresse de livraison">
            <br>
            <br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            <br>
            <br>
            <input type="submit" value="S'inscrire">
        </div>
    </form>
</div>


</body>
</html>