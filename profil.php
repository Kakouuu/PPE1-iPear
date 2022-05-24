<?php
require_once "db.php";
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="test.css">
        <link rel="stylesheet" href="profil.css">
        <title>Profil</title>


    </head>

    <?php
    include('nav.php');

    $sql = "select * from utilisateurs";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result);

    ?>

    <div class="profil">
        <h1>Informations</h1>

        <form action="profilupdate.php" method="post">
            <div class="infor1">
                Nom :
                <input type="text" id="nomdefamille" name="nom" value="<?= $row["Nom"]; ?>" style="margin-left: 5px"> <br>
            </div>
            <div class="infor1">
                Prenom :
                <input type="text" id="prenom" name="prenom" value="<?= $row["Prenom"]; ?>" style="margin-left: 5px"> <br>
            </div>
            <div class="infor1">
                Mail :
                <input type="text" id="email" name="mail" value="<?= $row["Mail"]; ?>" style="margin-left: 5px"> <br>
            </div>
            <div class="infor1">
                Téléphone :
                <input type="text" id="number" name="phone" value="<?= $row["NumTel"]; ?>" style="margin-left: 5px"> <br>
            </div>
            <div class="infor1">
                Adresse :
                <input type="text" id="adresse" name="adresse" value="<?= $row["Adresse"]; ?>" style="margin-left: 5px"> <br>
            </div>
            <input class="edit" type="submit" name="submit" onclick="valid()" value="Modifier mes informations">

        </form>

    <script>

        function valid() {
            var a = document.getElementById('email').value;
            var prenom = document.getElementById('prenom').value;
            var nom = document.getElementById('nomdefamille').value;
            var numero = document.getElementById('number').value;
            var addre = document.getElementById('adresse').value;
            var mdp = document.getElementById('mdp').value;
            console.log("salut")


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
    </script>
    </div>
    </body>
    </html>


<?php
include "footer.php";
?>