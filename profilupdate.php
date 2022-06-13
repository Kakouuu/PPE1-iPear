<?php
require_once "db.php";
session_start();

if(isset($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['phone'],$_POST['adresse'])) {

    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Mail = $_POST['mail'];
    $Phone = $_POST['phone'];
    $Adresse = $_POST['adresse'];

    
}

if(isset($_POST['submit'])){
    $sql = "UPDATE `utilisateurs` SET Nom = '$Nom', Prenom = '$Prenom', Mail = '$Mail', NumTel = '$Phone',  Adresse = '$Adresse' WHERE ID_user = '" . $_SESSION['ID'] . "'";
    mysqli_query($mysqli, $sql);
    $_SESSION['profil'] = 1;
    header("location: profil.php");
}    


?>