<?php

session_start();
require_once "db.php";
?>





<?php

$sql = "INSERT INTO `commande` (`ID_commande`, `ID_user`) VALUES (NULL, " . $_SESSION['ID'] . " )";
$result = $mysqli->query($sql);

// $sql = "SELECT DISTINCT C.ID_user, P.ID_PC, P.quantite, C.ID_Commande
// FROM panier AS P, commande AS C
// WHERE C.ID_user = 16";

$sql = "INSERT into detailscommande () values(ID_DetailsCommande, Quantite, ID_commande, ID_PC)"

header("location: index.php");

?>
