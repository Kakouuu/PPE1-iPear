<?php

session_start();
require_once "db.php";
?>





<?php

$sql = "INSERT INTO `commande` (`ID_commande`, `ID_user`) VALUES (NULL, " . $_SESSION['ID'] . " )";
$result = $mysqli->query($sql);

$sql = "SELECT ID_commande FROM commande ORDER BY ID_commande DESC LIMIT 1";

header("location: index.php");

?>
