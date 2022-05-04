<?php
require_once "db.php";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}

$sql = "select fruitslegumes.ID_FL, panier.quantite,fruitslegumes.Nom,fruitslegumes.Prix, fruitslegumes.Image from panier INNER JOIN fruitslegumes ON panier.ID_FL = fruitslegumes.ID_FL WHERE panier.ID_user='".$_SESSION["ID"]."'";
$result = mysqli_query($mysqli, $sql);
?>




<?php
if(isset($_POST['idprod'])){
    echo $_POST['idprod'];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
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
                <div class="trash">
                    <form action="test.php" method="POST">
                    <input type="hidden" name="idprod" value="<?=$row['ID_FL'];?>">
                        <button type="submit" name="suppr"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </div>
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

<?php 
$sql = "SELECT * FROM `fruitslegumes` WHERE ID_FL;";
$result = mysqli_query($mysqli, $sql);




// $id = $row["ID_FL"];
var_dump($result);

if(isset($_POST['suppr'])){

    $s = $_POST['suppr'];
    
    $sql = 'DELETE FROM panier WHERE ID_FL =' .$id .';';
    $result = mysqli_query($mysqli, $sql);
}

?>


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

