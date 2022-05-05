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

    

    $sql = 'DELETE FROM `panier` WHERE ID_FL =' . $_POST['idprod'] .' and ID_user =' . $_SESSION['ID'];
    mysqli_query($mysqli, $sql);
    header("Location: test.php");
   
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
<body onload="number()">

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
        $a = 0;

        while ($row = mysqli_fetch_array($result)){         
        ?>
        <div class="produits">
            <div style="display : flex;align-items : center;">
            <img class="imgprod" src="<?= $row["Image"]; ?>">
            <?= $row["Nom"]; ?></div>



            <div class="header_sous">
                <div><input id="number" type="number" onchange="number()" value="<?= $row['quantite']; ?>" min="1">
                <?php
                $sql = 'UPDATE panier SET quantite = '.$row['quantite'].' WHERE ID_user = '.$_SESSION['ID'].' and ID_FL = '.$row['ID_FL'];
                ?>
                </div>
                <div class="PU" id="<?= $row["Prix"]; ?>"><?= $row["Prix"]; ?> €</div>
                <div class="toto"></div>
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
<script>
    function number(){
        var calcul = document.getElementById("number").value;
        var prix = document.getElementsByClassName("PU")[0].id;
        var result = (calcul * prix).toFixed(2);

        document.getElementsByClassName("toto")[0].innerHTML = result + " €";
    }


</script>


</body>
</html>

