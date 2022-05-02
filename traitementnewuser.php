<?php
require_once "db.php";
?>

<?php
$Prenom = addslashes($_POST["prenom"]);
$Nom = addslashes($_POST["nom"]);
$Mail = addslashes($_POST["email"]);
$NumTel = addslashes($_POST["tel"]);
$Adresse = addslashes($_POST["poste"]);
$Mdp = addslashes($_POST["mdp"]);
$hashed_password = password_hash($Mdp, PASSWORD_DEFAULT);

$sql = "insert into utilisateurs (Nom, Prenom, Mail, NumTel, Mdp, Adresse) " .
    " values('" . $Nom . "', '" .  $Prenom . "','" .  $Mail  . "','" .  $NumTel . "','" . $hashed_password . "','" . $Adresse . "')";

mysqli_query($mysqli, $sql);

header("location: index.php");
?>