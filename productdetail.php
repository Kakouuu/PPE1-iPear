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

    <!-- INFORMATION PRODUIT -->
    <div class="grid_info_prod">

        <div class="nom_part">
            <h2 class="nom"><?=$row["Nom"];?></h2>
        </div>

        <span class="prix_part">
            <span class="prix"><?= $row["Prix"];?> € </span><span class="quantite"> / <?= $row["Quantite"];?> </span>
        </span>

        <div class="spec_part">
            <div>
                <b>Provenance : </b><?= $row["Provenance"]?>

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
            <a href="#" class="add_to_cart"> <i class="fas fa-shopping-cart"></i> Ajouter au panier </a>
        </div>
    </div>
</div>
</div>
</div>

</body>


    <?php
    include "footer.php"
    ?>