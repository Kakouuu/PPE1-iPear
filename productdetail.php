<?php
require_once "db.php";
session_start();
?>

<link rel="stylesheet" href="productdetail.css" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="popup.css">

<body>
<?php
include "nav.php"
?>
<?php 
if(isset($_SESSION['valid']) && $_SESSION['valid'] == 1){
    

?>
 <div class="cover" onclick="aplus(this)">
    <div class="popup" >
        Article ajouté <img src="img\check.png" alt="" style="width: 35px; margin-left: 20px;">
    </div>
</div>
    <script>
       function aplus(element){
        element.style.opacity = '0';
        element.addEventListener('transitionend', () => element.remove());
        
       }
    </script>

<?php
    $_SESSION['valid'] = 0;
}

$idleg = $_GET['id'];

$sql = "select * from ordinateur where ID_PC = " . $idleg;
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
            <h2 class="nom"><?= $row["NomComplet"]; ?></h2>
        </div>

        <span class="prix_part">
            <span class="prix"><?= $row["Prix"]; ?> € </span><span class="quantite"> </span>
        </span>

        <div class="qte_part">
            <h3><span class="title_info"> Quantité</h3>
        </div>
        <div class="qte_incr">
            <form action="addpanier.php" method="GET" style="display: flex">

                <select class="qteprod" name="qteprod" id="myNumber">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>

                </select>
        </div>


        <div class="desc_part">
            <h3 class="title_info">Configuration</h3>
            <p class="description_prod"><?= $row["Config"] ?></p>
        </div>


        <div class="addcart">
            <button class="add_to_cart"><i class="fas fa-shopping-cart"></i> Ajouter au panier</button>
            <input type="hidden" name="idprod" value="<?= $row['ID_PC']; ?>"/>
        </div>
        </form>
    </div>
</div>
</div>
</div>

</body>


<?php
include "footer.php"
?>


