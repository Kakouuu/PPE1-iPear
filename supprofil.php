<?php
require_once "db.php";


if(isset($_POST['iduser'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['phone'],$_POST['adresse'])) {

    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Mail = $_POST['mail'];
    $Phone = $_POST['phone'];
    $Adresse = $_POST['adresse'];
    $id = $_POST['iduser'];

}

if(isset($_POST['supp'])){
    $sql = "DELETE FROM `panier` WHERE `ID_user` = '$id';";
    $sqlg = "DELETE FROM `utilisateurs` WHERE `ID_user` = '$id';";
    mysqli_query($mysqli, $sql);
    mysqli_query($mysqli, $sqlg);
    header('Location: gerer.php');
}    


// if(isse($_POST['suppr'])){
//     
// }

?>