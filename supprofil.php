<?php
require_once "db.php";
session_start();

if(isset($_POST['iduser'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['phone'],$_POST['adresse'])) {

    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Mail = $_POST['mail'];
    $Phone = $_POST['phone'];
    $Adresse = $_POST['adresse'];
    $id = $_POST['iduser'];

}

if(isset($_POST['submit'])){
    $sql = "UPDATE `utilisateurs` SET Nom = '$Nom', Prenom = '$Prenom', Mail = '$Mail', NumTel = '$Phone',  Adresse = '$Adresse' WHERE ID_user = '" . $_SESSION['ID'] . "'";
    mysqli_query($mysqli, $sql);
    header("location: gerer.php");
}    


// if(isse($_POST['suppr'])){
//     $sqlm = " DELETE FROM `utilisateurs` WHERE `utilisateurs`.`ID_user` = ";
// }




?>