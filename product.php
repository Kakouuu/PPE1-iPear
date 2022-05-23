<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'youpoirebdd');
mysqli_query($mysqli, "SET NAMES utf8");
?>


<?php
include "nav.php";
?>


<?php

$idleg = $_GET['id'];

$sql = "select * from fruitslegumes where ID_FL = " . $idleg;
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($result);

?>
    <img class="frleg_img" src="<?= $row["Image"]; ?>">

<?php echo $row['Nom'] . "   " . $row['Quantite'] . "    " . $row['Conservation'];

include "footer.php";

?>