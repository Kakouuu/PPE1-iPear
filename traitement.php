<link rel="stylesheet" href="article.css">

<?php

require_once("db.php");


include "nav.php";


$search = $_GET['Rechercher'];

$sql = "select * from fruitslegumes where  Nom like'" . $search . "%'";
$result = mysqli_query($mysqli, $sql);
/*var_dump($search);*/
?>

<h1 style="margin : 20px;">Voici le résultat pour : <span><?php echo $search ?> </span></h1> 
    
<div class="article">

<?php
while ($row = mysqli_fetch_array($result)){
    $id = $row["ID_FL"];
?>

        <div class="articles">
            <a href="productdetail.php?id=<?php echo $id ?>"><img class="articles_img" src="<?= $row["Image"]; ?>"></a>
            <div class="article_name">
                <a href="productdetail.php?id=<?php echo $id ?>"><h1><?php echo $row['Nom']; ?></h1></a>
                <p class="articles_provenance">
                    Provenance : <?= $row["Provenance"]; ?></p>
                <p class="articles_achat">
                    <?= $row["Prix"];?> € / <?= $row["Quantite"];?><br/><br/>
                    <?= $row["Description"];?>

                </p>
            </div>
        </div>
<?php
}
?>
</div>
<?php
include "footer.php";
?>

