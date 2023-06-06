<?php

session_start();
require_once "db.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Traitement login</title>
    <meta charset="utf8"/>
    <link rel="stylesheet" href="css/longin.css">
</head>
<body>


<?php

$sql = "INSERT INTO `commande` (`ID_commande`, `ID_user`) VALUES (NULL, " . $_SESSION['ID'] . " )";
$result = $mysqli->query($sql);
header('Location : test.php')

?>

</body>
</html>
