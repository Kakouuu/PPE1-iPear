<?php
require_once "db.php";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}

$sql = "select panier.quantite,fruitslegumes.Nom,fruitslegumes.Prix, fruitslegumes.Image from panier INNER JOIN fruitslegumes ON panier.ID_FL = fruitslegumes.ID_FL WHERE panier.ID_user='".$_SESSION["ID"]."'";
$result = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Panier</title>
</head>
<body>

<?php
include('nav.php')
?>
<br> <br><br>
<div style="margin-left : 100px; margin-right : 100px;">

<h1 style="border-bottom : 1px solid black; padding-bottom:8px;">Panier</h1>
<br>



    <div class="all">
        <div class="header">

            <div class="nom">Nom du produit</div>

            <div class="header_sous">   
                <div>Quantité</div>
                <div>Prix unitaire</div>
                <div>Total</div>
                <div>Supprimer le pannier</div>
            </div>
        </div>
<hr>
        <?php
        while ($row = mysqli_fetch_array($result)){
        ?>
        <div class="produits">
            <div style="display : flex;align-items : center;">
            <img class="imgprod" src="<?= $row["Image"]; ?>">
            <?= $row["Nom"]; ?></div>

            <div class="header_sous">
                <div><input id="number" type="number" value="<?= $row['quantite']; ?>" min="1"></div>
                <div class="PU"><?= $row["Prix"]; ?>€</div>
                <div class="toto">12€</div>
                <div class="trash">Poubelle</div>
                 
            </div>

        </div>
            <hr>
            <?php
        }
        ?>
        
    </div>

        <div class="total">
            Prix total : 200,50 €
        </div>
<br>
        <div class="bas">
            <a href="index.php"><div class="retour">Retour à l'accueil</div></a>
                <div class="commande">Paiement</div>
        </div>

</div>


</body>
<script>
    function up(max) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
        if (document.getElementById("myNumber").value >= parseInt(max)) {
            document.getElementById("myNumber").value = max;
        }
    }
    function down(min) {
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
        if (document.getElementById("myNumber").value <= parseInt(min)) {
            document.getElementById("myNumber").value = min;
        }
    }

</script>
</html>

