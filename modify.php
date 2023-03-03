<?php
session_start();
include "nav.php";
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/modify.css">
    <title>Modifier les produits</title>
</head>
<?php

if ($_SESSION['ID'] != 6) {?>
    <script>window.location.replace("index.php");</script> <?php
}


?>


<br>
<H2>Gestion des produits :</H2>
<br>

<?php

$sql = "CALL `getPC`();";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($result)) {
    ?>
    <form action="modifyproduct.php" method="post">

    <input type="hidden" value="<?= $row["ID_PC"]; ?>" name="idpc">
Marque :
    <input type="text" value="<?= $row["Marque"]; ?>" name="marque">
Prix : 
    <input type="text" value="<?= $row["Prix"]; ?>" name="prix">
Nom :
    <input type="text" value="<?= $row["Nom"]; ?>" name="nom">
Nom complet :
    <input type="text" value="<?= $row["NomComplet"]; ?>" name="nomcomplet">
Configuration :
    <input type="text" value="<?= $row["Config"]; ?>" name="config">

    <input class="edit" type="submit" name="submit" value="Modifier">
    </form>
    
    <br> <?php
    ?> <br> <?php
    ?> <br> <?php


}

?>



<?php
include "footer.php";
?>
