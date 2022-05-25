<?php
session_start();
include "db.php";
if(isset($_POST['idproduct'],$_POST['qteprod'])) {

    $idprodct = $_POST['idproduct'];
    $qte = $_POST['qteprod'];
    $sql = "UPDATE `panier` SET quantite = '$qte' WHERE ID_user = '" . $_SESSION['ID'] . "' and ID_PC ='$idprodct'";
    mysqli_query($mysqli, $sql);
}
?>