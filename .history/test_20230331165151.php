<?php
require_once "db.php";
session_start();
if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
}

$sql = "select ordinateur.ID_PC, panier.quantite,ordinateur.Nom,ordinateur.Prix, ordinateur.Image from panier INNER JOIN ordinateur ON panier.ID_PC = ordinateur.ID_PC WHERE panier.ID_user='" . $_SESSION["ID"] . "'";
$result = mysqli_query($mysqli, $sql);
?>

<?php
if (isset($_POST['idprod'])) {



    $sql = 'DELETE FROM `panier` WHERE ID_PC =' . $_POST['idprod'] . ' and ID_user =' . $_SESSION['ID'];
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
    <link rel="stylesheet" href="css/test.css">
    <title>Panier</title>


    <script>
        function updcart(id) {

            $.ajax({
                url: "update.php",
                method: "POST",
                data: $("#frm" + id).serialize(),
                success: function(text) {
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


    <?php
    if (mysqli_num_rows($result) == 0) {
    ?>
        <div class="empty"> 
            <div><h1>Votre panier est vide</h1></div>    
            <div><a href="index.php"><button class="btn_empty">Retour à l'accueil</button></a></div>            
        </div>
        
    <?php
    }else{
        ?>
        
        <br> <br><br>
        <div style="margin-left : 100px; margin-right : 100px; padding-bottom: 50px;">
    
            <h1 style="border-bottom : 1px solid black; padding-bottom:8px; width : 500px;">Panier</h1>
            <br>
    
    
            <div class="all2">
    
    
                <div>
                    <?php
                    $a = 0;
    
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row["ID_PC"];
                        if (isset($id) == 992) {
                    ?>
                            <form id="frm<?php echo $id ?>">
                                <div class="produits2">
                                    <div style="display : flex;align-items : center;">
                                        <a href="productdetail.php?id=<?php echo $id ?>"><img class="imgprod" src="<?= $row["Image"]; ?>"></a>
                                        <?= $row["Nom"]; ?>
                                    </div>
    
                                    <div class="header_sous">
                                        <div class="PU" id="<?= $row["Prix"]; ?>" value="<?= $row["Prix"]; ?>"><?= $row["Prix"]; ?> €</div>
                                        <div class="qtepp">
                                            <input type="hidden" name="idproduct" value="<?php echo $id ?>">
                                            <select class="qteprod" name="qteprod" id="myNumber" onchange="number(<?= $a ?>);totalPrice();updcart(<?php echo $id ?>)" value="<?= $row['quantite']; ?>" onkeyup="updcart(<?php echo $id ?>)">
                                                <option selected disabled hidden>
                                                    <?= $row['quantite']; ?>
    
                                                </option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
    
                                            </select>
                                        </div>
                            </form>
    
                            <input class="toto" id="<?= $row["quantite"] * $row["Prix"] ?>" name="tata" value="<?= $row['quantite'] * $row["Prix"] ?> €" readonly />
    
    
    
    
                            <div class="trash">
                                <form action="test.php" method="POST">
                                    <input type="hidden" name="idprod" value="<?= $row['ID_PC']; ?>">
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
                    }
    ?>
    
    
        </div>
    
        <div class="recap">
    
    
            <h1>Récapitulatif</h1>
            <br>
            <div><span class="total"> Sous-Total :</span> <span class="total" id="totale" name="totalprice"></span></div>
            <br>
            <div><span class="total"> Code :</span> <input type="text" placeholder="code promo"></div>
            <div><span class="promo"></span>15 %</div>
            <br>
            <div> <span class="total"> Frais de port : </span id="tooto"> 5.30 €</div>
            <hr>
            <div> <span class="total"> Total : </span id="toto"> 50.23 €</div>
            <hr>
    
            <button class="payer">Paiement</button>
    
    
    
    
        </div>
    
    
        <br><br>
    
    
    
        </div>
    
        </div>
    
    
    
<?php
    }

    ?>





</body>

</html>


<?php
include "footer.php";
?>