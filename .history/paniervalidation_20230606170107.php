<?php

session_start();
require_once "db.php";
?>





<?php

$sql = "INSERT INTO `commande` (`ID_commande`, `ID_user`) VALUES (NULL, " . $_SESSION['ID'] . " )";
$result = $mysqli->query($sql);

// $sql = "SELECT P.ID_user, P.ID_PC, P.quantite, C.ID_Commande
// FROM panier AS P, commande AS C
// WHERE P.ID_user = 16";

header("location: index.php");

?>
