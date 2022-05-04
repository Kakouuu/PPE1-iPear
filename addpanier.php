<?php
require_once "db.php";
session_start();
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
}

$sql = "INSERT INTO panier (ID_user,ID_FL,quantite) VALUES ('".$_SESSION["ID"]."',
$result = mysqli_query($mysqli, $sql);



?>


