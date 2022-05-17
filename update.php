<?php
include "db.php";
echo "sadka";
$qteup = $_POST['qteupNew'];

$sql = "UPDATE `panier` SET quantite = '" . $qteup . "' WHERE ID_user = '" . $_SESSION['ID_user'] . "' and ID_FL ='" . $_POST['idprod'] . "'";
mysqli_query($mysqli, $sql);

?>