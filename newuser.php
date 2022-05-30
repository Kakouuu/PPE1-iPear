<?php
require_once "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="newuser.css">

</head>
<body>
<?php
//$code = ( uniqid('', true));
//print_r($code)
?>

<?php
if (isset($_SESSION['errore']) && $_SESSION['errore'] != 0) {
    ?>
    <div class="cover" onclick="aplus(this)">
        <?php
        if ($_SESSION['errore'] == 1) {
            ?>
            <div class="popup">
                Une erreur s'est produite, veuillez réssayer <img src="img\cross.png" alt=""
                                                                  style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['errore'] == 2) {
            ?>
            <div class="popup">
                Veuillez compléter le captcha <img src="img\cross.png" alt="" style="width: 35px; margin-right: 15px;">
            </div>
            <?php
        }
        if ($_SESSION['errore'] == 3) {
            ?>
            <div class="popup">
                Veuillez remplir tous les champs <img src="img\cross.png" alt="" style="width: 35px; margin-right: 15px;">
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
    $_SESSION['errore'] = 0;
}
?>

<div class="register">
    <form class="form" action="traitementnewuser.php" method="POST">
        <h2 class="fa-solid fa-seedling"> Creer un compte</h2>
        <div class="info">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" class="verif">
            <br>
            <br>
            <input type="text" id="nomdefamille" name="nom" placeholder="Nom">
            <br>
            <br>
            <input type="text" id="email" name="mail" placeholder="E-mail" class="verif">
            <br>
            <br>
            <input type="text" id="number" name="tel" placeholder="Numéro de téléphone">
            <br>
            <br>
            <input type="text" id="adresse" name="poste" placeholder="Adresse de livraison">
            <br>
            <br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" style="margin-left : 25px"><i
                    class="fa-solid fa-eye" style="margin : 5px;" onclick='montrer()'></i>
            <br>
            <br>
            <div class="g-recaptcha" data-sitekey="6LfE_xAgAAAAAOd9_sb-Ae66Ks7ujLy7XSLZ8x1-"></div>
            <br>
            <a href="login.php">J'ai déjà un compte</a>
            <br>
            <br>
            <a href="index.php">Retourner à l'accueil</a>
            <br>
            <br>
            <input type="submit" name="submit" onclick="valid()" value="S'inscrire">
        </div>
    </form>


    <script>


        function valid() {
            var a = document.getElementById('email').value;
            var prenom = document.getElementById('prenom').value;
            var nom = document.getElementById('nomdefamille').value;
            var numero = document.getElementById('number').value;
            var addre = document.getElementById('adresse').value;
            var mdp = document.getElementById('mdp').value;

            // console.log(a.search(/[0-9]/));

            if (a.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/) == 0) {

                document.getElementById('email').style.border = '1px green solid';
            } else {

                document.getElementById('email').style.border = '1px red solid';
                event.preventDefault()
            }
            if (prenom.search(/^[a-z ,.'-]+$/i) == 0) {
                document.getElementById('prenom').style.border = '1px green solid';
            } else {
                document.getElementById('prenom').style.border = '1px red solid';
                event.preventDefault()
            }

            if (nom.search(/^[a-z ,.'-]+$/i) == 0) {
                document.getElementById('nomdefamille').style.border = '1px green solid';
            } else {
                document.getElementById('nomdefamille').style.border = '1px red solid';
                event.preventDefault()
            }

            if (numero.search(/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/) == 0) {
                document.getElementById('number').style.border = '1px green solid';
            } else {
                document.getElementById('number').style.border = '1px red solid';
                event.preventDefault()
            }
            if (mdp.search(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/) == 0) {
                document.getElementById('mdp').style.border = '1px green solid';
            } else {
                document.getElementById('mdp').style.border = '1px red solid';
                event.preventDefault()
            }
            if (addre == "") {
                document.getElementById('adresse').style.border = '1px red solid';
                event.preventDefault()
            } else {
                document.getElementById('adresse').style.border = '1px green solid';
            }


        }


        function montrer() {
            var x = document.getElementById("mdp");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }


    </script>


</div>


</body>
</html>