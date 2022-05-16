<?php
require_once "db.php";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}


//if(isset($_GET['idprod'],$_GET['qteprod'])){
//    $sql = "INSERT INTO panier (ID_user,ID_FL,quantite) VALUES ('".$_SESSION['ID']."','".$_GET['idprod']."','".$_GET['qteprod']."')";
//    $result = mysqli_query($mysqli, $sql);
//    $_SESSION['valid'] = 1;
//    header("Location:productdetail.php?id=".$_GET["idprod"]);
//}

$sql = @mysqli_query("SELECT * FROM panier WHERE ID_user = '".$_SESSION['ID']."' and ID_FL = '".$_GET['idprod']."'");
if(mysqli_num_rows($sql) < 1) {

    $sql = "INSERT INTO panier (ID_user,ID_FL,quantite) 
            VALUES ('" . $_SESSION['ID'] . "','" . $_GET['idprod'] . "','" . $_GET['qteprod'] . "')
            ON DUPLICATE KEY UPDATE quantite = quantite + '" . $_GET['qteprod'] . "'";

    $result = mysqli_query($mysqli, $sql);
    $_SESSION['valid'] = 1;
    header("Location:productdetail.php?id=" . $_GET["idprod"]);

}
?>