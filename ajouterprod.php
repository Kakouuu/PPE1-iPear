<?php
session_start();
include "nav.php";
require_once "db.php";
?>

<?php



if ($_SESSION['ID'] != 6) {?>
    <script>window.location.replace("index.php");</script> <?php
}

?>

<br>
<h2>Ajouter un produit :</h2>
<br>


<form action="ajoutprod.php" method="post">
    <input type="hidden" value="Cdiscount" name="expediteur">
    <input type="hidden" value="1" name="quantite">
    <input type="hidden" value="Portable" name="typee">
    <input type="hidden" value="Ordniateur" name="catego">
    Marque :<input type="text" name="marque">
    Prix : <input type="text" name="prix">
    Nom : <input type="text" name="nom">
    Nom complet : <input type="text" name="nomcomplet">
    Configuration : <input type="text" name="config">
    <br><br>
    Image 1 : <input type="file" name="img1">
    <br>
    Image 2 : <input type="file" name="img2">
    <br>
    Image 3 : <input type="file" name="img3">
    <br>
    Image 4 : <input type="file" name="img4">
    <br><br>
    <input class="edit" type="submit" name="submit" value="Ajouter">
</form>