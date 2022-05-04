<?php
require_once "db.php";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}


if(isset($_GET['idprod'],$_GET['qteprod'])&& isset($_SESSION["ID"])){
    $sql = "INSERT INTO panier (ID_user,ID_FL,quantite) VALUES ('".$_SESSION['ID']."','".$_GET['idprod']."','".$_GET['qteprod']."')";
    $result = mysqli_query($mysqli, $sql);
    $_SESSION['valid'] = 1;
    header("Location:productdetail.php?id=".$_GET["idprod"]);
}

?>