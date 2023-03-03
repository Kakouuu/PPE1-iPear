<?php
session_start();
if(isset($_POST['expediteur'],$_POST['quantite'],$_POST['typee'],$_POST['nom'],$_POST['nomcomplet'],$_POST['config'])) {

    $Expedit = $_POST['expediteur'];
    $Quantit = $_POST['quantite'];
    $Typ = $_POST['typee'];
    $Cat = $_POST['catego'];
    $Marque = $_POST['marque'];
    $Marque = $_POST['prix'];
    $Nom = $_POST['nom'];
    $nomComplet = $_POST['nomcomplet'];
    $Config = $_POST['config'];
    $Img1 = $_POST['img1'];
    $Img2 = $_POST['img2'];
    $Img3 = $_POST['img3'];
    $Img4 = $_POST['img4'];

$Config = addslashes($Config);
}


$sql = "INSERT INTO ordinateur (`Expediteur`, `Quantite`, `Type`, `Categorie`, `Marque`, `Prix`, `Nom`, `NomComplet`, 
`Config`, `Image`, `Image2`, `Image3`, `Image4`) VALUES ('" . $Expedit . "','" . $Quantit . "','" . $Typ . "','" . $Cat . "','" 
. $Marque . "', '" .  $Prix . "','" .  $Nom  . "','" .  $nomComplet . "','" . $Config . "','" . $Img1 . "','" . $Img2 . "','" 
. $Img3 . "','" . $Img4 . "')";

        mysqli_query($mysqli, $sql);
        header("location: ajouterprod.php");