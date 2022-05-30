<?php
require_once "db.php";
session_start();

if(isset($_POST['idpc'],$_POST['marque'],$_POST['prix'],$_POST['nom'],$_POST['nomcomplet'],$_POST['config'])) {

    $IDpc = $_POST['idpc'];
    $Marque = $_POST['marque'];
    $Prix = $_POST['prix'];
    $Nom = $_POST['nom'];
    $NomComplet = $_POST['nomcomplet'];
    $Config = $_POST['config'];

$Config = addslashes($Config);

}

if(isset($_POST['submit'])){
    $sqlw = "UPDATE `ordinateur` SET Marque = '$Marque', Prix = '$Prix', Nom = '$Nom', NomComplet = '$NomComplet',  Config = '$Config' WHERE ID_PC = '$IDpc'";
    mysqli_query($mysqli, $sqlw);
    header("location: modify.php");
}    



?>