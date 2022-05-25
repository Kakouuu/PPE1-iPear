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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="test.css">
    <title>Panier</title>


    <script>
        function updcart(id){

            $.ajax({
                url:"update.php",
                method:"POST",
                data:$("#frm"+id).serialize(),
                success:function (text){
                    console.log(text)
                }
            });
        }
    </script>

</head>
<body onload="totalPrice()">

<?php
include('nav.php')
?>


<br> <br><br>
<div style="margin-left : 100px; margin-right : 100px;">

<h1 style="border-bottom : 1px solid black; padding-bottom:8px; width : 500px;">Panier</h1>
<br>



    <div class="all">
        <!-- <div class="header">

            <div class="nom">Nom du produit</div>

            <div class="header_sous">   
                <div>Quantité</div>
                <div>Prix unitaire</div>
                <div>Total</div>
                <div>Supprimer le pannier</div>
            </div>
        </div> -->


        <?php
        $a = 0;

        while ($row = mysqli_fetch_array($result)){
            $id = $row["ID_FL"];
        ?>
<form id="frm<?php echo $id ?>">
        <div class="produits">
            <div style="display : flex;align-items : center;">
                <a href="productdetail.php?id=<?php echo $id ?>"><img class="imgprod" src="<?= $row["Image"]; ?>"></a>
            <?= $row["Nom"]; ?></div>

            <div class="header_sous">
                <div class="PU" id="<?= $row["Prix"]; ?>" value="<?= $row["Prix"]; ?>"><?= $row["Prix"]; ?> €</div>
    <div class="qtepp">
        <input type="hidden" name="idproduct" value="<?php echo $id ?>">
        <select class="qteprod" name="qteprod" id="myNumber" onchange="number(<?=$a?>);totalPrice();updcart(<?php echo $id ?>)"
                value="<?= $row['quantite'];?>" onkeyup="updcart(<?php echo $id ?>)">
            <option selected disabled hidden>
                <?= $row['quantite'];?>

            </option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>

        </select>
    </div>
</form>

                <input class="toto" id="<?=$row["quantite"]*$row["Prix"] ?>" name="tata" value="<?= $row['quantite']*$row["Prix"] ?> €" readonly />


                <?php
               // $sql = 'UPDATE `panier` SET quantite = '.$row["quantite"].' WHERE ID_user = '.$_SESSION['ID_user'].' and ID_FL =' . $_POST['idprod'];
                ?>

                <div class="trash">
                    <form action="test.php" method="POST">
                    <input type="hidden" name="idprod" value="<?=$row['ID_FL'];?>">
                        <button type="submit" name="suppr"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </div>
            </div>
            <?php
            $a += 1;
            ?>
        </div>
            
            <?php
        }
        ?>
        
    </div>
        <div class="total" id="totale" name="totalprice"></div>
<br>
        <div class="bas">
            <a href="index.php"><div class="retour">Retour à l'accueil</div></a>
                <div class="commande">Validation</div>
        </div>
        
</div>

<br>

</body>
</html>


<?php
include "footer.php";
?>