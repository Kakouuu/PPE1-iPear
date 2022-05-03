<?php
    require_once "db.php"
?>

<link rel="stylesheet" href="productdetail.css">

<body>
<?php
include "nav.php"
?>

<?php

$idleg = $_GET['id'];

$sql = "select * from fruitslegumes where ID_FL = " . $idleg;
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($result);

?>

<div class="grid-container_product">
    <!-- IMAGE -->
    <div class="photo_product">
        <img class="img_product" src="<?= $row["Image"]; ?>">
    </div>


    <div class="grid_info_prod">

        <div class="nom_part">
            <h2 class="nom"><?=$row["Nom"];?></h2>
        </div>

        <span class="prix_part">
            <span class="prix"><?= $row["Prix"];?> € </span><span class="quantite"> / <?= $row["Quantite"];?> </span>
        </span>

        <div class="qte_part">
            <h3><span class="title_info"> Quantité</h3>
        </div>
        <div class="qte_incr">
            <div class="input-group-btn">
                <button id="down" class="btn btn-default" onclick=" down('1')"><span class="glyphicon glyphicon-minus">-</span></button>
            </div>
            <input type="text" id="myNumber" class="qte_css"  style="width: 150px" value="1" />
            <div class="input-group-btn">
                <button id="up" class="btn btn-default" onclick="up('10')"><span class="glyphicon glyphicon-plus">+</span></button>
            </div>
        </div>


        <div class="spec_part">
            <div>
                <b>Provenance : </b><?= $row["Provenance"]?>
                <br>
                <br>
            </div>
        </div>

        <div class="desc_part">
            <h3 class="title_info">Description</h3>
            <p class="description_prod"><?= $row["Description"]?></p>
            <h3 class="title_info">Conservation</h3>
            <p class="description_prod"><?= $row["Conservation"]?></p>
        </div>
        <div class="addcart">
            <a href="addpanier.php" class="add_to_cart"> <i class="fas fa-shopping-cart"></i> Ajouter au panier </a>
            <input type="hidden" name="idprod" value="<?=$row['ID_FL'];?>"
        </div>
    </div>
</div>
</div>
</div>

</body>


    <?php
    include "footer.php"
    ?>

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
