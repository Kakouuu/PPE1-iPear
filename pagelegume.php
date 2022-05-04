<?php
require_once "db.php";
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <title> Légumes Fruits </title>

</head>
<body>


<?php
include "nav.php";
?>



<div class="frleg">
    <?php

    $sql = "SELECT * FROM `fruitslegumes` WHERE Type = '" . $_GET['id'] . "';";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["ID_FL"];
        ?>

        <div class="frlegs">

            <a href="productdetail.php?id=<?php echo $id ?>"><img class="frleg_img" src="<?= $row["Image"]; ?>"></a>
            <div class="frleg_name">
                <form action="addpanier.php" method="GET">
                    <a href="productdetail.php?id=<?php echo $id ?>"><h1><?php echo $row['Nom']; ?></h1></a>
                    <p class="frleg_provenance">
                        Provenance : <?= $row["Provenance"]; ?></p>
                    <p class="frleg_achat">
                        Quantité :  <input class="qte_css" type="number" name="qte" value="1" min = "1" max ="10" /><br/>
                        Prix: <?= $row["Prix"]; ?> €
                        <input type="hidden" name="idprod" value="<?=$row['ID_FL'];?>">
                               <br>
                        <br><br>
                        ID: <?= $row["ID_FL"]; ?>
                    </p>
                    <input type="submit" value="Ajouter au panier">

                </form>

            </div>

        </div>
        <?php
    }
    ?>
</div>

<?php
include "footer.php";
?>

</body>
</html>
