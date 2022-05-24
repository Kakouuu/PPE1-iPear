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

    <form>
    <div class="infor1">
        Nom :
        <input value="<?= $row["Nom"]; ?>" style="margin-left: 5px"> <br>
    </div>

    <div class="infor1">
        Prenom :
        <input value="<?= $row["Prenom"]; ?>"style="margin-left: 5px"> <br>
    </div>
    <div class="infor1">
        Mail :
        <input value="<?= $row["Mail"]; ?>"style="margin-left: 5px"> <br>
    </div>
    <div class="infor1">
        Téléphone :
        <input value="<?= $row["NumTel"]; ?>"style="margin-left: 5px"> <br>
    </div>
    <div class="infor1">
        Adresse :
        <input value="<?= $row["Adresse"]; ?>"style="margin-left: 5px"> <br>
    </div>

    <button class="edit">Modifier mes informations</button>
    </form>
</div>
    </body>
    </html>


<?php
include "footer.php";
?>