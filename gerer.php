<?php
require_once "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/gerer.css">
    <title>Gérer les utilisateurs</title>
</head>
<body>
<?php
include "nav.php";
?>
<?php
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
    ?>
    <div class="cover" onclick="aplus(this)">
        <div class="popup">
            Impossible de supprimer cet utilisateur <img src="img\cross.png" alt=""
                                                         style="width: 35px; margin-right: 15px;">
        </div>
    </div>
    <script>
        function aplus(element) {
            element.style.opacity = '0';
            element.addEventListener('transitionend', () => element.remove());

        }
    </script>

    <?php
    $_SESSION['admin'] = 0;
}
?>
<div class="allall">
<?php
$sql = "CALL `getUsers`();";
$result = mysqli_query($mysqli, $sql);


while ($row = mysqli_fetch_array($result)) {
    ?> <br>
    <form action="supprofil.php" method="post" class="salut">
            <div class="all">
                <div class="infor1">

                    <input type="hidden" id="nomdefamille" name="iduser" value="<?= $row["ID_user"]; ?>" readonly>
                </div>
                <div class="infor1">
                    Nom :
                    <input type="text" id="nomdefamille" name="nom" value="<?= $row["Nom"]; ?>" readonly>
                </div>

                <div class="infor1">
                    Prenom :
                    <input type="text" id="prenom" name="prenom" value="<?= $row["Prenom"]; ?>" readonly>
                </div>

                <div class="infor1">
                    Mail :
                    <input type="text" id="email" name="mail" value="<?= $row["Mail"]; ?>" readonly>
                </div>

                <div class="infor1">
                    Téléphone :
                    <input type="text" id="number" name="phone" value="<?= $row["NumTel"]; ?>" readonly>
                </div>

                <div class="infor1">
                    Adresse :
                    <input type="text" id="adresse" name="adresse" value="<?= $row["Adresse"]; ?>" readonly>
                </div>


                <!-- <input type="submit" name="suppr" onclick="valid()" value="Supprimer"> -->
                <input type="submit" placeholder="supprimer" name="supp" value="supprimer">
            </div>
    </form>


    <br><?php
}
?>

</div>




<?php
include "footer.php";
?>
</body>
</html>