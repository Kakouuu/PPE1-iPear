<link rel="stylesheet" href="css/article.css">

<?php

require_once("db.php");
session_start();
include "nav.php";


$search = $_GET['Rechercher'];

$sql = "select * from ordinateur where  Nom like'" . $search . "%'";
$result = mysqli_query($mysqli, $sql);
/*var_dump($search);*/
?>

<div class="article">

<?php
while ($row = mysqli_fetch_array($result)){
    $id = $row["ID_PC"];
?>

        <div class="articles">
            <a href="productdetail.php?id=<?php echo $id ?>"><img class="articles_img" src="<?= $row["Image"]; ?>"></a>
            <div class="article_name">
                <a href="productdetail.php?id=<?php echo $id ?>"><h1><?php echo $row['Nom']; ?></h1></a>
                <p class="articles_provenance">
                    Expediteur : <?= $row["Expediteur"]; ?></p>
                <p class="articles_achat">
                    <?= $row["Prix"];?> € <br/><br/>
                    <?= $row["NomComplet"];?>

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

