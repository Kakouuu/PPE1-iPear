<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="longin.css">

</head>
<body>

<?php
if ($_SESSION['errore'] == 4) {
    ?>
    <div class="cover" onclick="aplus(this)">
        <div class="popupe">
            Inscription réussie <img src="img\check.png" alt="" style="width: 35px; margin-left: 15px;">
        </div>

    </div>
    <script>
        function aplus(element) {
            element.style.opacity = '0';
            element.addEventListener('transitionend', () => element.remove());

        }
    </script>
    <?php
    $_SESSION['errore'] = 0;
}
?>

<?php
if (isset($_SESSION['error']) && $_SESSION['error'] != 0) {

    ?>
    <div class="cover" onclick="aplus(this)">
        <?php
        if ($_SESSION['error'] == 1) {
            ?>
            <div class="popup">
                Une erreur s'est produite, veuillez réssayer <img src="img\cross.png" alt=""
                                                                  style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['error'] == 2) {
            ?>
            <div class="popup">
                Veuillez compléter le captcha <img src="img\cross.png" alt="" style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['error'] == 3) {
            ?>
            <div class="popup">
                Veuillez remplir tous les champs <img src="img\cross.png" alt=""
                                                      style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['error'] == 4) {
            ?>
            <div class="popup">
                Mot de passe incorrect <img src="img\cross.png" alt="" style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['error'] == 5) {

            ?>
            <div class="popup">
                Email ou mot de passe incorrect <img src="img\cross.png" alt=""
                                                     style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        ?>

    </div>

    <script>
        function aplus(element) {
            element.style.opacity = '0';
            element.addEventListener('transitionend', () => element.remove());

        }
    </script>

    <?php
    $_SESSION['error'] = 0;
}
?>

<div class="block-inscription">
    <form action="traitementlogin.php" method="post">

        <br>
        <h2 class="fa-solid fa-seedling"> Se Connecter</h2>
        <div class="users-infos">
            <input type="email" placeholder="E-mail" name="Mail" style="width : 200px;">
            <br><br>
            <input type="password" placeholder="Mot de passe" name="Mdp" id="motde"
                   style="width : 200px; margin-left : 29px;"><i class="fa-solid fa-eye" style="margin : 5px;"
                                                                 onclick='montrer()'></i>
            <br>
            <br>
            <div class="g-recaptcha" data-sitekey="6LfE_xAgAAAAAOd9_sb-Ae66Ks7ujLy7XSLZ8x1-"></div>
            <br>
            <br>
            <a href="newuser.php">Créer un compte</a> <br><br>
            <a href="index.php">Retourner à l'accueil</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Se connecter">
        </div>
    </form>


</div>
<script type="text/javascript">
    function montrer() {
        var x = document.getElementById("motde");

        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
</html>