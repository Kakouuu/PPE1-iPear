<?php
require_once "db.php";
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}


//if(isset($_GET['idprod'],$_GET['qteprod'])){
//    $sql = "INSERT INTO panier (ID_user,ID_FL,quantite) VALUES ('".$_SESSION['ID']."','".$_GET['idprod']."','".$_GET['qteprod']."')";
//    $result = mysqli_query($mysqli, $sql);
//    $_SESSION['valid'] = 1;
//    header("Location:productdetail.php?id=".$_GET["idprod"]);
//}

if(isset($_GET['idprod'],$_GET['qteprod'])){

    $sql = "INSERT INTO panier (ID_user,ID_PC,quantite) 
            VALUES ('" . $_SESSION['ID'] . "','" . $_GET['idprod'] . "','" . $_GET['qteprod'] . "')
            ON DUPLICATE KEY UPDATE quantite = quantite + '" . $_GET['qteprod'] . "'";

    $result = mysqli_query($mysqli, $sql);
    $_SESSION['valid'] = 1;
    header("Location:productdetail.php?id=" . $_GET["idprod"]);

}
?>