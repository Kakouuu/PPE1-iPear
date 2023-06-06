<?php

session_start();
require_once "db.php";


$mail = addslashes($mail);
$mdp = addslashes($mdp);

$sql = "INSERT INTO `commande` (`ID_commande`, `ID_user`) VALUES (NULL, '16')";
$result = $mysqli->query($sql);
$res = mysqli_num_rows($result);


?>