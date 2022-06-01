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
    Marque :<input type="text" name="marque">
    Prix : <input type="text" name="prix">
    Nom : <input type="text" name="nom">
    Nom complet : <input type="text" name="nomcomplet">
    Configuration : <input type="text" name="config">
    Image : <input type="file">
    <input class="edit" type="submit" name="submit" value="Ajouter">
</form>